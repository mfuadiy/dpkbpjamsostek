<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    public function get_all_galeri($where)
    {
        return $this->db->get_where('galeri', ['keterangan' => $where])->result_array();
    }

    public function countAll()
    {
        return $this->db->count_all('galeri');
    }
}
