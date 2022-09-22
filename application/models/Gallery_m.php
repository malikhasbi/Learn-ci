<?php defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_m extends CI_Model
{
    public function getAllJoin()
    {
        $this->db->select('*, gallery.name as gName, category.id as cId ,category.name as cName');
        $this->db->from('gallery');
        $this->db->join('category', 'category.id = gallery.category');
        return $this->db->get()->result();
    }

    public function getIdCategory()
    {
    }
}
