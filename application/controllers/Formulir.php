<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller 
{
public function formulir_()
	{
		$this->load->view('templates/header');
		$this->load->view('formulir/formulir_pdf');
		$this->load->view('templates/footer');
	}
}