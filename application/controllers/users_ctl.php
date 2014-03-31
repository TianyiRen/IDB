<?php
class Search extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
	}
	
	public function index()
	{

	}
	
	public function search()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['searchWord'] = 'Search';

		$this->form_validation->set_rules('searchWord', 'Title', 'required');
		//$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');  
			$this->load->view('dianping/search');
			$this->load->view('templates/footer');
		}
		else
		{
			$data['restaurantsInfo'] = $this->search_model->search_name('Barshu');

			$this->load->view('templates/header');
			$this->load->view('dianping/show', $data);
			$this->load->view('templates/footer');
		}
	}
	
}