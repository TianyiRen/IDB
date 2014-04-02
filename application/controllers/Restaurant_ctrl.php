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
		
		$restaurantInfo = $this->restaurant_model->search_restaurant($restaurantID);
		print_r($restaurantInfo);
		$this->load->view('templates/header');
		$this->load->view('search_view/search');
		
		$this->load->view('templates/footer');
		
	}	
}
?>