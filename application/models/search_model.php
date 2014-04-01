<?php
class Search_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function search_restaurants()
	{
		$searchWord = $this->input->post('searchBox');
		$query = "SELECT R.restaurantName FROM Restaurants R WHERE restaurantName LIKE '%$searchWord%'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function search_dishes()
	{
		$searchWord = $this->input->post('searchBox');
		$query = "SELECT R.restaurantName FROM Dishes D, Restaurants R WHERE D.restaurantID = R.restaurantID AND D.dishName LIKE'%$searchWord%'";
		$result = $this->db->query($query);
		return $result->result_array();
	}

}


?>