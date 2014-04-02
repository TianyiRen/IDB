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
}


?>