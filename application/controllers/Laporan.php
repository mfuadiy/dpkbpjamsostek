<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function kepesertaan()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/kepesertaan');
		$this->load->view('templates/footer');
	}


	public function keuangan()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/keuangan');
		$this->load->view('templates/footer');
	}

	public function keuangan2021()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/keuangan2021');
		$this->load->view('templates/footer');
	}

	public function keuangan2022()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/keuangan2022');
		$this->load->view('templates/footer');
	}

	public function keuangan2023()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/keuangan2023');
		$this->load->view('templates/footer');
	}

	public function keuangan2024()
	{
		$this->load->view('templates/header');
		$this->load->view('laporan/keuangan2024');
		$this->load->view('templates/footer');
	}
}
