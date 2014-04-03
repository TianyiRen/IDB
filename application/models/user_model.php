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
	public function signup($signupInfo)
	{
		//print_r($signupInfo);
		$email = $signupInfo['user_Email'];
		$password = $signupInfo['user_Password'];
		$passwordAgain = $signupInfo['user_Password_Again'];
		$name = $signupInfo['user_Name'];
		$gender = $signupInfo['user_Gender'];
		$if_email_exist = "
							SELECT U.userEmail 
							FROM Users U
							WHERE U.userEmail = '$email'
							";
		$if_email_exist = $this->db->query($if_email_exist);
		$if_email_exist = $if_email_exist->result_array();
		if(!empty($if_email_exist)) //exist
		{
			$resData['type'] = 'alreadyExists';
		}
		else if($password != $passwordAgain)
		{
			$resData['type'] = 'retypePwd';
		}
		//invalid password
		else if(empty($email))
		{
			$resData['type'] = 'EmailCannotBeBlank';
		}
		else if(empty($name))
		{
			$resData['type'] = 'NameCannotBeBlank';
		}
		else if(empty($gender))
		{
			$resData['type'] = 'GenderCannotBeBlank';
		}
		else if(empty($password))
		{
			$resData['type'] = 'PasswordCannotBeBlank';
		}
		else  //input right
		{
			$userID = "
						SELECT max(TO_NUMBER(U.userID)) as max
						FROM Users U
					";
			$userID = $this->db->query($userID);
			$userID = $userID->result_array();
			$userID = $userID[0]['MAX'];
			$userID = (int)$userID;
			$userID = $userID + 1;
			$userID = (string)$userID;
			$insert = "INSERT INTO Users (userID, userName, userGender, userEmail, userPassword) 
						VALUES ('$userID', '$name', '$gender', '$email', '$password')";
			$insert = $this->db->query($insert);
			$query = " 
						SELECT U.userName as name
						FROM Users U
						WHERE U.userEmail = '$email'";
			$result = $this->db->query($query);
			$result = $result->result_array();
			$resData['type'] = 'signupSuccess';	
			$resData['name'] = $result[0]['NAME'];	
		}
		return $resData;
	}
	
}


?>