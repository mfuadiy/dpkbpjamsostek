<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datul_model', 'datul'); // Load model
        $this->load->library('form_validation'); // Load form validation library
    }

    public function index()
    {
        $data['prov'] = $this->db->get('prov')->result_array();

        $this->load->view('templates/header');
        $this->load->view('datul/index', $data);
        $this->load->view('templates/footer');
    }

    public function inquiry()
    {
        $data['form_data'] = $this->db->order_by('date_created', 'DESC')
            ->get_where('datul', ['periode' => '2025'])
            ->result_array();

        $this->load->view('templates/header');
        $this->load->view('datul/inquiry', $data);
        $this->load->view('templates/footer');
    }

    public function get_jenis_pensiun()
    {
        $stppp = $this->input->post('stppp');

        $ci = get_instance();
        $jp = $ci->db->get_where('jenis_pensiun', ['stppp' => $stppp])->row_array();

        if ($jp) {
            echo json_encode(["jp" => $jp]);
        } else {
            echo json_encode(["jenis_pensiun" => "Tidak Ditemukan"]);
        }
    }

    public function cek_npk()
    {
        $npk = $this->input->post('npk'); // Ambil input NPK

        // Cek data di tabel peserta_pasif
        $pn = $this->datul->get_npk_pn($npk);
        if ($pn) {
            // Cek apakah NPK sudah ada di tabel datul (sudah melakukan data ulang)
            $data_ulang = $this->datul->get_datul($npk);

            echo json_encode([
                'status' => 'success',
                'data' => $pn,
                'data_ulang' => $data_ulang ? true : false
            ]);
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> NPK tidak ditemukan, silakan periksa kembali atau hubungi petugas.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
            echo json_encode(['status' => 'error']);
        }
    }

    public function simpan_data()
    {
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('rtrw', 'RW/RT', 'required');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('kodepos', 'Kode Pos', 'numeric');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|numeric|exact_length[16]',
            array(
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s harus berupa angka.',
                'exact_length' => 'Kolom %s harus terdiri dari 16 digit angka.'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan pesan error
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Validasi Gagal!</strong><br>' . validation_errors() . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('datul');
        } else {
            // Ambil NPK
            $npk = $this->input->post('npk_');
            $periode = '2025'; // Periode tetap atau bisa diganti sesuai input

            // **CEK DUPLIKASI DATA BERDASARKAN NPK & PERIODE**
            $cek = $this->db->get_where('datul', ['npk' => $npk, 'periode' => $periode])->row_array();
            if ($cek) {
                $this->session->set_flashdata('error', 'Data dengan NPK ini sudah ada untuk periode ' . $periode);
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Data dengan NPK ini sudah ada untuk periode ' . $periode . '.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                redirect('datul');
            }
            // Load library upload
            $this->load->helper('upload_file');

            // Upload file
            $ktp_file   = upload_file('ktp', $npk, 'ktp', './assets/img/datul/ktp/');
            $kk_file    = upload_file('kk', $npk, 'kk', './assets/img/datul/kk/');
            $skbm_file  = upload_file('skbm', $npk, 'skbm', './assets/img/datul/skbm/');
            $data['pensiun'] = $this->datul->getPensiun($npk);

            $a = "";
            $b = "";
            $c = "";
            $d = "";
            $e = "";
            $f = "";
            $g = "";
            $h = "";
            $i = "";

            if ($this->input->post('nama') != $data['pensiun']['nama']) {
                $a = "Nama, ";
            }
            if ($this->input->post('alamat') != $data['pensiun']['alamat']) {
                $b = "Alamat, ";
            }
            if ($this->input->post('rtrw') != $data['pensiun']['rt_rw']) {
                $c = "RT/RW, ";
            }
            if ($this->input->post('kelurahan') != $data['pensiun']['kelurahan']) {
                $d = "Kelurahan, ";
            }
            if ($this->input->post('kecamatan') != $data['pensiun']['kecamatan']) {
                $e = "Kecamatan, ";
            }
            if ($this->input->post('kota') != $data['pensiun']['kota']) {
                $f = "Kota, ";
            }
            if ($this->input->post('no_hp') != $data['pensiun']['hp']) {
                $g = "Nomor HP, ";
            }
            if ($this->input->post('nik') != $data['pensiun']['nik']) {
                $h = "NIK, ";
            }
            if ($this->input->post('kodepos') != $data['pensiun']['kodepos']) {
                $i = "Kodepos";
            }
            // Simpan ke database
            $data = array(
                'npk'      => $npk,
                'nopen'     => $this->input->post('nopen'),
                'nama'      => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tglhr'),
                'stppp'     => $this->input->post('stppp_'),
                'alamat'    => $this->input->post('alamat'),
                'rt_rw'     => $this->input->post('rtrw'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kota'      => $this->input->post('kota'),
                'provinsi'  => $this->input->post('provinsi'),
                'kodepos'   => $this->input->post('kodepos'),
                'no_hp'     => $this->input->post('no_hp'),
                'no_hplain' => $this->input->post('no_hplain'),
                'email'     => $this->input->post('email'),
                'nik'       => $this->input->post('nik'),
                'file_ktp'  => $ktp_file,
                'file_kk'   => $kk_file,
                'file_skbm' => $skbm_file,
                'periode'   => '2025',
                'pic'       => $this->input->post('nama'),
                'status'    => '1',
                'data_benar' => 'Saya ' . $this->input->post('nama') . ', menyatakan bahwa data yang dimasukkan adalah benar dan dapat dipertanggungjawabkan.',
                'persetujuan'     => 'Saya ' . $this->input->post('nama') . ', menyetujui untuk menyerahkan data kepada DPK BPJS Ketenagakerjaan dan memberikan hak kepada DPK BPJS Ketenagakerjaan untuk mengelola data tersebut sesuai kepentingan dengan tetap mengacu pada peraturan perundang-undangan yang berlaku.',
                'perubahan'     => '' . $a . '' . $b . '' . $c . '' . $d . '' . $e . '' . $f . '' . $g . '' . $h . '' . $i,

            );

            // Simpan data ke database
            if ($this->db->insert('datul', $data)) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Sukses!</strong> Data berhasil disimpan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
            } else {
                $this->session->set_flashdata('error', 'Gagal menyimpan data.');
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Gagal menyimpan data.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
            }

            redirect('datul');
        }
    }

    public function inquiry_form()
    {
        $data['form_data'] = $this->db->get('form')->result_array();

        $this->load->view('templates/header');
        $this->load->view('form/inquiry', $data);
        $this->load->view('templates/footer');
    }
}
