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

	public function updatestudata()
	{

		$this->load->model('updatesturec');
		$item = new updatesturec;
		$item->updatesturecords();
		redirect(base_url().'index.php/Welcome/edit_student','refresh');
	
	}

	public function updateteacher()
	{

		$this->load->model('updatetearec');
		$item = new updatetearec;
		$item->updatetearecords();
		redirect(base_url().'index.php/Welcome/editt_teacher','refresh');
	
	}
}
?>