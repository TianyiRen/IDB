<?php
class Search_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
	}
	public function search()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('searchBox', 'Title', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('search_view/search');   
			$this->load->view('templates/footer');
		}
		else
		{
			$partialInfo1 = $this->search_model->search_restaurants();
			$partialInfo2 = $this->search_model->search_dishes();
			foreach($partialInfo2 AS $item)
			{
				if (!in_array($item, $partialInfo1))
				{
					array_push($partialInfo1, $item);
				}
			}
			$data['restaurantList'] = $partialInfo1;
			
			$this->load->view('templates/header');
			$this->load->view('restaurantList_view/show', $data);    
			$this->load->view('templates/footer');
		}
	}	
}
?>