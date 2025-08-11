<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{

	public function index() {
	
		$this->load->view('templates/header');
		$this->load->view('form/index');
		$this->load->view('templates/footer');
	}
	public function submit_form() {
        // Aturan validasi
        $this->form_validation->set_rules('nama', 'Nama', 'required' , ['required' => 'Nama harus diisi.']);
        $this->form_validation->set_rules('npk', 'NPK', 'required|numeric|regex_match[/^\d{9,10}$/]', [
			'required'    => 'NPK harus diisi.',
			'numeric'     => 'NPK hanya boleh berisi angka.',
			'regex_match' => 'NPK harus terdiri dari 9 sampai 10 angka. Pilih salah satu NPK atau Nomor Pensiun.'
		]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]', [
			'required'     => 'NIK harus diisi.',
			'exact_length' => 'NIK harus terdiri dari 16 angka.'
		]);
        $this->form_validation->set_rules('npwp', 'NPWP', 'required|numeric', [
			'required' => 'NPWP harus diisi.',
			'numeric'  => 'NPWP hanya boleh berisi angka.'
		]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus diisi.']);
        $this->form_validation->set_rules('rtrw', 'RT/RW', 'required', ['required' => 'RT/RW harus diisi.']);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', ['required' => 'Kelurahan harus diisi.']);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => 'Kecamatan harus diisi.']);
        $this->form_validation->set_rules('kota', 'Kota', 'required', ['required' => 'Kota harus diisi.']);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', ['required' => 'Provinsi harus dipilih.']);

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, beri pesan error melalui session
    			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data Gagal Disimpan. </div>');

			// Muat ulang form
				$this->load->view('templates/header');
				$this->load->view('form/index');
				$this->load->view('templates/footer');
        } else {
            // Ambil data dari input
            $data = [
                'nama' => $this->input->post('nama'),
                'npk' => $this->input->post('npk'),
                'nik' => $this->input->post('nik'),
                'npwp' => $this->input->post('npwp'),
                'alamat' => $this->input->post('alamat'),
                'rtrw' => $this->input->post('rtrw'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kota' => $this->input->post('kota'),
                'provinsi' => $this->input->post('provinsi'),
            ];

            // Masukkan data ke database
            $this->db->insert('form', $data);

            // Redirect dengan pesan sukses
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Data Berhasil Disimpan.
			</div>');
            redirect('form');
        }
	}

	public function inquiry_form() {
		$data['form_data'] = $this->db->get('form')->result_array();

		$this->load->view('templates/header');
		$this->load->view('form/inquiry', $data);
		$this->load->view('templates/footer');
	}
	
}