<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whistleblowing extends CI_Controller 
{

public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('whistleblowing/index');
		$this->load->view('templates/footer');
	}

}