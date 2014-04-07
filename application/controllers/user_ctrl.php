<?php
class User_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function login()
	{
		$this->form_validation->set_rules('userEmail', 'Email', 'required');
		$this->form_validation->set_rules('userPassword', 'Password', 'required');
		$user_data = $this->session->all_userdata();
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', $user_data);
			$this->load->view('user_view/login');
			$this->load->view('templates/footer');
		}
		else
		{
			$userEmail = $this->input->post('userEmail');
			$userPwd = $this->input->post('userPassword');
			$loginResult = $this->User_model->login($userEmail, $userPwd);
			//echo $loginResult['type'];
			if($loginResult['type']==='noUser')
			{
				$this->load->view('templates/header');
				$this->load->view('templates/navigation', $user_data);
				$this->load->view('user_view/login');
				$this->load->view('user_view/noUser');
				$this->load->view('templates/footer');	
			}
			else if($loginResult['type']==='Fail')
			{
				$this->load->view('templates/header');
				$this->load->view('templates/navigation', $user_data);
				$this->load->view('user_view/login');
				$this->load->view('user_view/invalidPwd');
				$this->load->view('templates/footer');		
			}
			else 
			{
				$loginInfo = array(
						'user_name'  => $loginResult['name'],
						'user_ID' => $loginResult['ID'],
						'user_email' => $userEmail,
						'logged_in' => true
						);
				$this->session->set_userdata($loginInfo);
				
				$url = site_url('search');  
				echo "<script type='text/javascript'>";  
				echo "window.location.href='$url'";  
				echo "</script>";   
	
			}
		}
		
	}
	public function logout()
	{
		$logoutInfo = array(
					'user_name'  => null,
					'user_ID' => null,
					'user_email' => null,
					'logged_in' => false
					);
		$this->session->set_userdata($logoutInfo);
		
		$url = site_url('search');  
		echo "<script type='text/javascript'>";  
		echo "window.location.href='$url'";  
		echo "</script>";

	}
	public function signup()
	{
		$this->form_validation->set_rules('userEmail', 'Email', 'required');
		$this->form_validation->set_rules('userName', 'Name', 'required');
		$this->form_validation->set_rules('userGender', 'Gender', 'required');
		$this->form_validation->set_rules('userPassword', 'Password', 'required');
		$this->form_validation->set_rules('userPasswordAgain', 'PasswordAgain', 'required');
		
		$user_data = $this->session->all_userdata();
		if($this->form_validation->run() === FALSE)
		 {
			 $this->load->view('templates/header');
			 $this->load->view('templates/navigation', $user_data);
			 $this->load->view('user_view/signup');
			 $this->load->view('templates/footer');
		 }
		else
		{
			$signupInfo['user_Email'] = $this->input->post('userEmail');
			$signupInfo['user_Name'] = $this->input->post('userName');
			$signupInfo['user_Gender'] = $this->input->post('userGender');
			$signupInfo['user_Password'] = $this->input->post('userPassword');
			$signupInfo['user_Password_Again'] = $this->input->post('userPasswordAgain');
			$signupResult = $this->User_model->signup($signupInfo);
			
			if($signupResult['type']==='invalidPwd')
			{
				$this->load->view('templates/header');
				$this->load->view('templates/navigation', $user_data);
				$this->load->view('user_view/signup');
				$this->load->view('user_view/signupErrors/invalidPwd');
				$this->load->view('templates/footer');	
			}
			else if($signupResult['type']==='retypePwd')
			{
				$this->load->view('templates/header');
				$this->load->view('templates/navigation', $user_data);
				$this->load->view('user_view/signup');
				$this->load->view('user_view/signupErrors/retypePwd');
				$this->load->view('templates/footer');		
			}
			else if($signupResult['type'] === 'alreadyExists')
			{
				$this->load->view('templates/header');
				$this->load->view('templates/navigation', $user_data);
				$this->load->view('user_view/signup');
				$this->load->view('user_view/signupErrors/alreadyExists');
				$this->load->view('templates/footer');
			}
			else if($signupResult['type'] === 'EmailCannotBeBlank')
			{
			}
			else if($signupResult['type'] === 'NameCannotBeBlank')
			{
			}
			else if($signupResult['type'] === 'GenderCannotBeBlank')
			{
			}
			else if($signupResult['type'] === 'PasswordCannotBeBlank')
			{
			}
			
			//sign up succeed
			else 
			{
				$signup_Info = array(
						'user_name'  => $signupResult['name'],
						'user_ID' => $signupResult['ID'],
						'user_email' => $signupInfo['user_Email'],
						'logged_in' => true
						);
				$this->session->set_userdata($signup_Info);
				
				$url = site_url('search');  
				echo "<script type='text/javascript'>";  
				echo "window.location.href='$url'";  
				echo "</script>";   
				
			}
		}
	}
	//show user profile page
	public function userProfile($userID)
	{	
		$data['restaurantReviewList'] = $this->User_model->getRestaurantReview($userID);
		$data['dishReviewList'] = $this->User_model->getDishReview($userID);
		$user_data = $this->session->all_userdata();
		$this->load->view('templates/header');
		$this->load->view('templates/navigation', $user_data);
		$this->load->view('search_view/search');
		$this->load->view('user_view/userProfile', $data);
		$this->load->view('templates/footer');
	}
	
	//delete selected restaurant review
	public function deleteRReview($userID, $reviewID)
	{
		$this->User_model->deleteRReview($reviewID);
		$data['restaurantReviewList'] = $this->User_model->getRestaurantReview($userID);
		$user_data = $this->session->all_userdata();
		
		$url = site_url("user/$userID");  
		echo "<script type='text/javascript'>";  
		echo "window.location.href='$url'";  
		echo "</script>";   
		/*
		$this->load->view('templates/header');
		$this->load->view('templates/navigation', $user_data);
		$this->load->view('search_view/search');
		$this->load->view('user_view/deleteR', $data);
		$this->load->view('templates/footer');	
		*/
	}
	
	//delete selected dish review
	public function deleteDReview($userID, $reviewID)
	{
		$this->User_model->deleteDReview($reviewID);
		$data['dishReviewList'] = $this->User_model->getDishReview($userID);
		$user_data = $this->session->all_userdata();
		
		$url = site_url("user/$userID");  
		echo "<script type='text/javascript'>";  
		echo "window.location.href='$url'";  
		echo "</script>";
		/*
		$this->load->view('templates/header');
		$this->load->view('templates/navigation', $user_data);
		$this->load->view('search_view/search');
		$this->load->view('user_view/deleteD', $data);
		$this->load->view('templates/footer');
		*/
	}
	
	//show user setting page
	public function setting($userID)
	{
		$this->form_validation->set_rules('changeName', 'Name', 'required');
		$this->form_validation->set_rules('changePassword', 'Password', 'required');
		$user_data = $this->session->all_userdata();
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', $user_data);
			$this->load->view('user_view/setting', $user_data);
			$this->load->view('templates/footer');
		}
		else
		{
			$changePwd = $this->input->post('changePassword');
			$changeName = $this->input->post('changeName');
			$this->User_model->changePassword($userID,$changePwd);
			$this->User_model->changeName($userID, $changeName);
			$updated_Info = array(
						'user_name'  => $changeName,
						'user_ID' => $userID,
						'user_email' => $user_data['user_email'],
						'logged_in' => true
						);
			$this->session->set_userdata($updated_Info);
			$url = site_url('search');  
			echo "<script type='text/javascript'>";  
			echo "window.location.href='$url'";  
			echo "</script>"; 
			
		}
	}
	
	
	
	
	
	
	
}
?>