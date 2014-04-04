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
				SELECT U.userPassword as pwd, U.userName as name, U.userID as ID
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
			$resData['ID'] = $result[0]['ID'];
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
			$resData['ID'] = $userID;
		}
		return $resData;
	}
	
	public function getRestaurantReview($userID)
	{
		$restaurantReview = "
					SELECT w.userID as UserID, r.reviewID as ReviewID, r.reviewTitle as Title, r.reviewContent as Content, 
							r.reviewScore as Score, r.reviewPrice as Price, r.environment as Environment, r.services as Services
					FROM writtenTogetherRT w, RestaurantReviews r 
					WHERE w.userID = $userID AND w.reviewID = r.reviewID 
					";
		$restaurantReview = $this->db->query($restaurantReview);
		return $restaurantReview = $restaurantReview->result_array();
	}
	public function getDishReview($userID)
	{
		
		$dishReview = "
					SELECT w.userID as UserID, d.reviewID as ReviewID, d.reviewTitle as Title, d.reviewContent as Content,
							d.reviewScore as Score, d.reviewPrice as Price, d.taste as Taste, d.volumn as Volumn, d.look as Look
					FROM writtenTogetherDT w, DishReviews d
					WHERE w.userID = $userID AND w.reviewID = d.reviewID
					";
		$dishReview = $this->db->query($dishReview);
		return $dishReview = $dishReview->result_array();	
	}
	public function changePassword($userID, $userPwd)
	{
		$query = "
					UPDATE Users
					SET userPassword = '$userPwd'
					WHERE userID = '$userID'
				";
		$this->db->query($query);
	}
	public function changeName($userID, $userName)
	{
		$query = "
					UPDATE Users
					SET userName = '$userName'
					WHERE userID = '$userID'
				";
		$this->db->query($query);
	}
	public function deleteRReview($reviewID)
	{
		$query = "
					DELETE FROM RestaurantReviews r
					WHERE r.reviewID = $reviewID 
					";
		$this->db->query($query);
	}
	public function deleteDReview($reviewID)
	{
		$query = "
					DELETE FROM DishReviews d
					WHERE d.reviewID = $reviewID
					";
		$this->db->query($query);
	}
					
	
}


?>