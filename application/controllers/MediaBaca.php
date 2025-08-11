<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MediaBaca extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MediaBaca_model', 'mediabaca');
	}

	public function artikel()
	{
		$this->load->view('templates/header');
		$this->load->view('media_baca/artikel');
		$this->load->view('templates/footer');
	}

	public function load_data()
	{
		$limit = 3; // Jumlah artikel per halaman
		$start = $this->input->post('page') ? $this->input->post('page') : 0;

		$data['artikel'] = $this->mediabaca->get_artikel($limit, $start);
		$data['total_artikel'] = $this->mediabaca->get_total_artikel();
		$data['limit'] = $limit;

		echo json_encode($data);
	}

	// Buletin
	public function buletin()
	{
		$data['buletin'] = $this->mediabaca->getAllBuletin();
		$this->load->view('templates/header');
		$this->load->view('media_baca/buletin', $data);
		$this->load->view('templates/footer');
	}

	// Galeri
	public function galeri()
	{
		$this->load->view('templates/header');
		$this->load->view('galeri/index');
		$this->load->view('templates/footer');
	}
}
