<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchmodel extends CI_Controller{

   // public function __construct() {
   //     parent::__construct();

   }
   public function search($keyword)
   {
       $this->db->like('first_name',$keyword);
       $query = $this->db->get('user');
       return $query->result_array();
   }
}
?>