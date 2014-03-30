<?php
class News_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  
  public function get_news($slug = FALSE){
  if ($slug === FALSE)
  {
    $query = $this->db->get('DISHES'); // changed from news to dishes
    return $query->result_array();
  }
  
  $query = $this->db->get_where('dishes', array('dishname' => $slug)); // changed from news to dishes
  return $query->row_array();
}
  
  
  
}