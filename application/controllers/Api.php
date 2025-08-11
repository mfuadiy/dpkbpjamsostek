<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MediaBaca_model', 'mediabaca');
    }

    public function artikel()
    {
        $artikel = $this->mediabaca->get_artikel(); // Ganti sesuai fungsi yang kamu punya
        echo json_encode([
            'status' => true,
            'artikel' => $artikel
        ]);
    }
}
