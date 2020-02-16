<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Search extends CI_Controller
{

   public function __construct() {
       parent::__construct();
       $this->load->model('searchmodel');

   }


   function search_keyword()
   {
       $keyword=$this->input->post('submit');
       $data['users']=$this->searchmodel->search($keyword);

       $this->load->view('user/view', $data);

   }
}
?>