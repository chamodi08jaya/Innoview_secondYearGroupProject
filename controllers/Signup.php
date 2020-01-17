<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

public function registration()
{
$this->load->model('Studentregistration');
$item = new Studentregistration;
$item->registeruser();
redirect(base_url().'index.php/Welcome/sturegistrations','refresh');
}

public function tregistration()
{
$this->load->model('Teacherregistration');
$item = new Teacherregistration;
$item->registeruser();
redirect(base_url().'index.php/Welcome/tearegistrations','refresh');
}

public function rregistration()
{
$this->load->model('Receptionistregistration');
$item = new Receptionistregistration;
$item->registeruser();
redirect(base_url().'index.php/Welcome/recepregistrations','refresh');
}

}