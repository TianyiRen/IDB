<?php
class Restaurant_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
	}
	public function viewRes($restaurantID)
	{
		$this->load->helper('form');
		
		$this->load->view('templates/header');
		$this->load->view('search_view/search');
		
		$this->load->view('templates/footer');
		
	}	
}
?>