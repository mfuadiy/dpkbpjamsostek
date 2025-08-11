<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datul_model extends CI_Model
{

    public function get_npk_pn($npk)
    {
        $this->db->select('peserta_pasif.*, 
                   COALESCE(dbpn.nama, peserta_pasif.nama) AS nama, 
                   COALESCE(dbpn.tglhr, peserta_pasif.tglhr) AS tglhr, 
                   COALESCE(dbpn.stppp, peserta_pasif.stppp) AS stppp');
        $this->db->from('peserta_pasif');
        $this->db->join('dbpn', 'dbpn.npk = peserta_pasif.npk AND dbpn.p_thn = "2025"', 'left');
        $this->db->where('peserta_pasif.npk', $npk);
        $this->db->where('peserta_pasif.okverifi', 'Y');

        return $this->db->get()->row_array();
    }

    public function getPensiun($npk)
    {
        $this->db->select('*');
        $this->db->from('peserta_pasif');
        $this->db->where('npk', $npk);
        $query = $this->db->get()->row_array();
        return ($query);
    }

    public function get_datul($npk)
    {
        $where = array(
            'npk' => $npk,
            'periode' => '2025'
        );
        return $this->db->get_where('datul', $where)->row_array();
    }

    public function get_by_stppp($stppp)
    {
        return $this->db->get_where('jenis_pensiun', ['stppp' => $stppp])->row_array();
    }
}
