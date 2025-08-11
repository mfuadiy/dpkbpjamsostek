<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$this->db->order_by('urutan', 'ASC');
		$data['carousel'] = $this->db->get_where('carousel', ['aktif' => 1])->result();


		$this->load->view('templates/header');
		$this->load->view('beranda/beranda', $data);
		$this->load->view('templates/footer');
	}
	public function get_chart_data()
	{
		// Hitung jumlah peserta aktif dengan statpes = 'A'
		$query_aktif = $this->db->where('st_pes', 'A')->count_all_results("peserta_aktif");

		// Hitung jumlah peserta pasif dengan statpes = 'P'
		$query_pasif = $this->db
			->where('okverifi', 'Y')
			->where('thblnaik >=', '202501') // Kondisi tambahan
			->count_all_results("peserta_pasif");

		$aktif = 1595;
		$pasif = 2176;
		// Kirim hasil dalam format JSON
		echo json_encode([
			"labels" => ["Aktif", "Pasif"],
			"data" => [$aktif, $pasif]
		]);
	}
}
