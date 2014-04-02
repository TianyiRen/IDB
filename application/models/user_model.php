<?php
//Model related to users.
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function login($userEmail, $userPwd)
	{
		$query = "
				SELECT U.userPassword as pwd, U.userName as name
				FROM Users U
				WHERE U.userEmail = '$userEmail'
				";
		$result = $this->db->query($query);
		$result = $result->result_array();
		if(empty($result))
		{
			$resData['type'] = 'noUser';	
		}
		else if($userPwd === $result[0]['PWD'])
		{
			$resData['type'] = 'Success';	
			$resData['name'] = $result[0]['NAME'];	
		}
		else
		{
			$resData['type'] = 'Fail';
		}
		//print_r($result->result_array());
		return $resData;
	}
	
}


?>