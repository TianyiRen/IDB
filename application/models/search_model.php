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
		//$query = "SELECT R.restaurantName FROM Restaurants R WHERE restaurantName = 'Barshu'";
		//$this->db->query($query, array($searchWord));
		//$this->db->query($query);
		//$result = $this->db->get();
		$result = $this->db->get_where('restaurants', array('restaurantName' => $searchWord));
		return $result->result_array();
	}
	public function search_dishes()
	{
		$searchWord = $this->input->post('searchBox');
		$query = "SELECT R.restaurantName  FROM Dishes D, Restaurants R WHERE D.restaurantID = R.restaurantID AND D.dishName LIKE'%?%' ";
		$this->db->query($query, array($searchWord));
		$result = $this->db->get();
		return $result->result_array();
	}

}


?>