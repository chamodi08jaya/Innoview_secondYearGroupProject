<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


// public function index()
// {
// $this->load->view('sturegistration.php');
// }

// public function signin()
// {
// $this->load->view('login.php');
// }
public function registration()
{
$this->load->model('studentregistration');
$item = new studentregistration;
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

public function book()
{
$this->load->model('book');
$item = new book;
$item->book();
redirect(base_url().'index.php/Welcome/recep_hall','refresh');
}


public function delete()
{
$this->load->model('delete');
$item = new delete;
$item->delete();
redirect(base_url().'index.php/Welcome/cancel_booking','refresh');
}

public function rrsend()
{
$this->load->model('send');
$item = new send;
$item->resend();
redirect(base_url().'index.php/Welcome/recep_noti','refresh');
}



}