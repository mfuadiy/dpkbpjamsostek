<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model', 'galeri');
    }

    public function dpkj()
    {
        $where = 'dpkj';
        $data['galeri'] = $this->galeri->get_all_galeri($where); // Mengambil semua data galeri
        $data['total_rows'] = count($data['galeri']); // Menghitung total gambar
        $data['limit'] = 8; // Jumlah gambar per halaman

        $this->load->view('templates/header');
        $this->load->view('galeri/dpkj', $data);
        $this->load->view('templates/footer');
    }

    public function ppkj()
    {
        $where = 'ppkj';
        $data['galeri'] = $this->galeri->get_all_galeri($where); // Mengambil semua data galeri
        $data['total_rows'] = count($data['galeri']); // Menghitung total gambar
        $data['limit'] = 8; // Jumlah gambar per halaman

        $this->load->view('templates/header');
        $this->load->view('galeri/ppkj', $data);
        $this->load->view('templates/footer');
    }
}
