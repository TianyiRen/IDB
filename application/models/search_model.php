<?php
class Search_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	//search restaurants that contain the query in searchBox
	public function search_restaurants()
	{
		$searchWord = $this->input->post('searchBox');
		$query = "SELECT * FROM Restaurants R WHERE UPPER(restaurantName) LIKE UPPER('%$searchWord%')";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	//search restaurants that have dish which name contains the query in searchBox
	public function search_dishes()
	{
		$searchWord = $this->input->post('searchBox');
		$query = "SELECT * FROM Dishes D, Restaurants R WHERE D.restaurantID = R.restaurantID AND UPPER(D.dishName) LIKE UPPER('%$searchWord%')";
		$result = $this->db->query($query);
		return $result->result_array();
	}

}


?>