<?php
class Search_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  
	public function search_name()
	{
	
		//$this->load->helper('url');
		//$name = url_title($this->input->post('title'), 'dash', TRUE);
        if(($_POST['category'])==='Restaurant')
		{
			$name = $this->input->post('searchWord');
			$query = $this->db->get_where('restaurants', array('restaurantName' => $name));
			return $query->row_array();
		}
		else if(($_POST['category'])==='Dishes')
		{
			$name = $this->input->post('searchWord');
			$query = $this->db->get_where('dishes', array('dishName' => $name));
			return $query->row_array();
		}
		
			
		
	}
}