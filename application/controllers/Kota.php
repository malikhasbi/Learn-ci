<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kota_m");
    }

    function index()
    {
        $data['b'] = $this->kota_m->tampil_kota();
        $this->load->view('template/header');
        $this->load->view('kota/vKota', $data);
        $this->load->view('template/footer');
    }
}
