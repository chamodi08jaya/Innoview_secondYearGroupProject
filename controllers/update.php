<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class update extends CI_Controller 
{
	

	public function updatedata()
	{

		$this->load->model('updaterec');
		$item = new updaterec;
		$item->updaterecords();
		redirect(base_url().'index.php/Welcome/edit_recep','refresh');
	
	}
}
?>