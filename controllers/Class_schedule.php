<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class_schedule extends CI_Controller {

	
	public function index(){
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function class_schedule()
	{
		$this->load->view('class_schedule');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function home()
	{
		$this->load->view('welcome');
	}
	public function login_submit()
	{
		$this->load->view('login_submit');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	
}