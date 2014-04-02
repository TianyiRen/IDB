<?php
class Restaurant_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('restaurant_model');
	}
	public function viewRes($restaurantID)
	{
		$this->load->helper('form');
		
		//load detail information of this restaurant from DB
		$restaurantInfo = $this->restaurant_model->search_restaurant($restaurantID);
		$data['restaurantInfo'] = $restaurantInfo;
		
		//load detail information of the dishes in this restaurant from DB
		$dishInfo = $this->restaurant_model->search_dish($restaurantID);
		$data['dishInfo'] = $dishInfo;
		
		//show header, searchBox, restaurantView and footer
		$this->load->view('templates/header');
		$this->load->view('search_view/search');
		$this->load->view('restaurantDetail_view/restaurantDetail', $data);
		$this->load->view('templates/footer');
		
	}	
}
?>