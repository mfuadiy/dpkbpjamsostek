<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MediaBaca_model extends CI_Model
{

    public function get_artikel($limit, $start)
    {
        $this->db->order_by('date_created', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get('artikel');
        return $query->result_array();
    }

    public function get_total_artikel()
    {
        return $this->db->count_all('artikel');
    }

    public function getAllBuletin()
    {
        return $this->db->get('buletin')->result_array();
    }
}
