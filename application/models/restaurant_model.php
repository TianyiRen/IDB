<?php
//Model used in the detail page of restaurant Info.
class Restaurant_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	//load detail information of this restaurant by ID from DB
	public function search_restaurant($ID)
	{
		$query = 	"SELECT
						R.restaurantID AS ID,
						R.restaurantName AS NAME,
						TO_CHAR(R.restaurantOpentime, 'HH:MI') AS OPEN,
						TO_CHAR(R.restaurantClosetime, 'HH:MI') AS CLOSE,
						R.restaurantAddress AS ADDR,
						R.restaurantLocationX AS LOCX,
						R.restaurantLocationY AS LOCY
					FROM Restaurants R WHERE restaurantID = $ID";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	//load detail information of the dishes in this restaurant by ID from DB
	public function search_dish($ID)
	{
		$query = 	"SELECT
						D.dishID AS ID,
						D.dishName AS NAME,
						D.dishPrice AS PRICE
					FROM Restaurants R, Dishes D 
					WHERE R.restaurantID = D.restaurantID AND R.restaurantID = $ID";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	//search selected restaurant reviews from DB
	public function search_rreview($ID)	
	{
		$query = "
					SELECT 	DISTINCT
							r.reviewTitle as TITLE,
							r.reviewContent as CONTENT,
							r.reviewScore as SCORE,
							r.reviewPrice as PRICE,
							r.environment as ENVIRONMENT,
							r.services as SERVICES
					FROM writtenTogetherRT w, RestaurantReviews r
					WHERE w.restaurantID = $ID AND w.reviewID = r.reviewID";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	//search selected restaurant dish reviews from DB
	public function search_dreview($ID)
	{
		$query = "
					SELECT 	r.reviewTitle as TITLE,
							r.reviewContent as CONTENT,
							r.reviewScore as SCORE,
							r.reviewPrice as PRICE,
							r.taste as TASTE,
							r.volumn as VOLUMN,
							R.look as LOOK
					FROM Dishes d, writtenTogetherDT w, DishReviews r
					WHERE d.restaurantID = $ID AND d.dishID = writtenTogetherDT.dishID AND r.reviewID = w.reviewID";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	//insert a restaurant review into DB
	public function upload_review($data)
	{
		$userID = $data['user_data']['user_ID'];
		$restaurantID = $data['restaurantID'];
		$reviewTitle = $data['reviewTitle'];
		$reviewText = $data['reviewText'];
		$postDate = date("m/d/y/h/i/s",time()); 
		$overall = $data['Overall'];
		$price = $data['Price'];
		$environment = $data['Environment'];
		$services = $data['Services'];
		
		$reviewID = "SELECT max(TO_NUMBER(R.reviewID)) as max
						FROM RestaurantReviews R";
		$reviewID = $this->db->query($reviewID)->result_array();
		$reviewID = (int)$reviewID[0]['MAX'] + 1;
		$reviewID = (string)$reviewID;
		$insertReview = "
					INSERT INTO RestaurantReviews (reviewID, reviewTitle, reviewContent, reviewScore,
													reviewPrice, environment, services)
					VALUES ('$reviewID', '$reviewTitle', '$reviewText', $overall, $price, $environment, $services)
					";
		$this->db->query($insertReview);
		
		//TAG ID = '0000000000' means user doesn't input any TAG.
		$tags = $data['Tags'];
		foreach($tags as $tagID)
		{	
			$insertRT = "
					INSERT INTO writtenTogetherRT (tagID, reviewID, userID, restaurantID, postedDate)
					VALUES ('$tagID', '$reviewID', '$userID', '$restaurantID', TO_DATE('$postDate', 'mm/dd/yy/hh/mi/ss'))
					";
			$this->db->query($insertRT);	
		}	
	}
	
	//search a photo of a restaurant from DB
	public function search_photo($restaurantID)
	{
		$query = 	"SELECT
						p.photoPath as Path, p.uploadDate as UploadDates, p.userID as UserID
					FROM Photos p
					WHERE TO_CHAR(p.category) = '1' AND p.restaurantID = $restaurantID
					";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}
	
	//search all tag name from DB
	public function search_all_tags()
	{
		$query = "
					SELECT t.tagID as TagID, t.tagcontent as TagContent
					FROM tags t
				";
		return $this->db->query($query)->result_array();	
	}
	
	//search the times of posted restaurant tags from DB
	public function search_rtags($restaurantID)
	{
		$query = "
					SELECT t.tagID as TagID, t.tagContent as TagContent, count(t.tagID) as Count
					FROM writtenTogetherRT w, tags t
					WHERE w.restaurantID = $restaurantID AND w.tagID = t.tagID
					GROUP BY t.tagID, t.tagContent
				";
		return $this->db->query($query)->result_array();
	}
	
	//search the times of posted dish tags from DB
	public function search_dtags($dishID)
	{
		$query = "
					SELECT t.tagID as TagID, t.tagContent as TagContent
					FROM writtenTogetherDT w, tags t
					WHERE w.dishID = $dishID AND w.tagID = t.tagID
				";
		return $this->db->query($query)->result_array();
	}
}


?>