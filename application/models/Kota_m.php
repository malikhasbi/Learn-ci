<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kota_m extends CI_Model
{
    function tampil_kota()
    {
        $this->db->select('id, kota, provinsi, COUNT(provinsi) as total');
        $this->db->group_by('provinsi');
        $this->db->order_by('total', 'desc');
        $hasil = $this->db->get('kota');
        return $hasil;
    }
}
