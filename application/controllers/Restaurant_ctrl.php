<?php
class Restaurant_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('restaurant_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	//show detailed information of a restaurant in restaurant detail page
	public function viewRes($restaurantID)
	{
		//load detail information of this restaurant from DB
		$restaurantInfo = $this->restaurant_model->search_restaurant($restaurantID);
		$photoInfo = $this->restaurant_model->search_photo($restaurantID);
		
		$data['restaurantInfo'] = $restaurantInfo;
		$data['photoInfo'] = $photoInfo;
		
		//load detail information of the dishes in this restaurant from DB
		$dishInfo = $this->restaurant_model->search_dish($restaurantID);
		$data['dishInfo'] = $dishInfo;
		
		//load all reviews about this restaurant from DB
		$rReviewInfo = $this->restaurant_model->search_rreview($restaurantID);
		$data['rReviewInfo'] = $rReviewInfo;
		
		//load all tags related to the restaurant 
		$rtagInfo = $this->restaurant_model->search_rtags($restaurantID);
		$data['rtagInfo'] = $rtagInfo;
		
		
		//load session
		$user_data = $this->session->all_userdata();
		$data['user_data'] = $user_data;
		$data['restaurantID'] = $restaurantID;
		
		//show header, searchBox, restaurantView and footer
		$this->load->view('templates/header');
		$this->load->view('templates/navigation', $user_data);
		$this->load->view('search_view/search');
		
		$this->load->view('restaurantDetail_view/restaurantDetail', $data);
		$this->load->view('restaurantDetail_view/map', $data);
		
		//If a photo of this restaurant exists, show it
		if(!empty($photoInfo))
		{
			$path = $photoInfo[0]['PATH'];
			$path = substr($path, -14);
			$data['Path'] = $path;
		}
		else
		{
			$data['Path'] = "nopic.jpg";
		}
		$this->load->view('restaurantDetail_view/showPic', $data);
		
		$this->load->view('restaurantDetail_view/existingReview', $data);
		
		//If user has already logged in, show the text box of adding a comment of this restaurant.
		if(!empty($data['user_data']['logged_in']))
		{
			$allTags = $this->restaurant_model->search_all_tags();
			$data['allTags'] = $allTags;
			$this->load->view('restaurantDetail_view/submitReview', $data);
		}
		$this->load->view('templates/footer');
	}	
	
	//submit new review in restaurant detail page
	public function submitReview($restaurantID)
	{
		$data['reviewTitle'] = $this->input->post('reviewTitle');
		$data['reviewText'] = $this->input->post('reviewText');
		$data['user_data'] = $this->session->all_userdata();
		$data['restaurantID'] = $restaurantID;
		$data['Overall'] = $this->input->post('Overall');
		$data['Price'] = $this->input->post('Price');
		$data['Environment'] = $this->input->post('Environment');
		$data['Services'] = $this->input->post('Services');
		
		$data['Tags'] = $this->input->post('tagbox');
		if(empty($data['Tags']))
			$data['Tags'] = array("0000000000");
		
		
		if(empty($data['reviewTitle']) or empty($data['reviewText'])) // jump to detail page without doing anything
		{
			$url = site_url('restaurantInfo/' . $restaurantID);  
			echo "<script type='text/javascript'>";  
			echo "window.location.href='$url'";  
			echo "</script>";   
		}
		else // put data into DB and then jump to detail page
		{
			$this->restaurant_model->upload_review($data);
			
			$url = site_url('restaurantInfo/' . $restaurantID);  
			echo "<script type='text/javascript'>";  
			echo "window.location.href='$url'";  
			echo "</script>";   
		}
	}
	
	public function test()
	{
		$this->load->view('restaurantDetail_view/test');
	}
}
?>