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
	public function viewRes($restaurantID)
	{
		//load detail information of this restaurant from DB
		$restaurantInfo = $this->restaurant_model->search_restaurant($restaurantID);
		$data['restaurantInfo'] = $restaurantInfo;
		
		//load detail information of the dishes in this restaurant from DB
		$dishInfo = $this->restaurant_model->search_dish($restaurantID);
		$data['dishInfo'] = $dishInfo;
		
		//load all reviews about this restaurant from DB
		$rReviewInfo = $this->restaurant_model->search_rreview($restaurantID);
		$data['rReviewInfo'] = $rReviewInfo;
		
		//load session
		$user_data = $this->session->all_userdata();
		$data['userdata'] = $user_data;
		$data['restaurantID'] = $restaurantID;
		
		//show header, searchBox, restaurantView and footer
		$this->form_validation->set_rules('reviewTitle', 'Title', 'required');
		$this->form_validation->set_rules('reviewText', 'Text', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', $user_data);
			$this->load->view('search_view/search');
			$this->load->view('restaurantDetail_view/restaurantDetail', $data);
			if(!empty($data['userdata']['logged_in']))
			{
				$this->load->view('restaurantDetail_view/submitReview', $data);
			}
			$this->load->view('templates/footer');
		}
		else
		{
			$data['reviewTitle'] = $this->input->post('reviewTitle');
			$data['reviewText'] = $this->input->post('reviewText');
			//$data['restaurantID'] existed
			print_r($data['userdata']);
			
			
			$this->restaurant_model->upload_review($data);
			
			
			
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', $user_data);
			$this->load->view('search_view/search');
			$this->load->view('restaurantDetail_view/restaurantDetail', $data);
			if(!empty($data['userdata']['logged_in']))
			{
				$this->load->view('restaurantDetail_view/uploadSuccess');
				$this->load->view('restaurantDetail_view/submitReview', $data);
			}
			$this->load->view('templates/footer');
		}
		
	}	
	
	public function submitReview($restaurantID)
	{
		
	}
	
}
?>