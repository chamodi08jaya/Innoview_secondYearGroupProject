<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome');
		// $this->load->view('login');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function class_schedule()
	{
		$this->load->view('class_schedule');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function login_submit()
	{
		// print("bchdvbubvy");
		$this->load->view('login_submit');
		// $this->load->view('admin');
		
	}
	public function admin(){
		$this->load->view('admin');
		$this->load->view('sturegistrations');
	}

	
	
	
}
