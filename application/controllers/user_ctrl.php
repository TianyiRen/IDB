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
					'user_email' => null,
					'logged_in' => false
					);
		$this->session->set_userdata($logoutInfo);
		
		$url = site_url('search');  
		echo "<script type='text/javascript'>";  
		echo "window.location.href='$url'";  
		echo "</script>";

	}

}
?>