<?php
class Restaurant_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function search_restaurant($ID)
	{
		$query = "SELECT * FROM Restaurants R WHERE restaurantID = $ID";
		$result = $this->db->query($query);
		return $result->result_array();
	}

}


?>