<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->user_m->getAll();
        $data['orang'] = $this->user_m->getById($id = 4);
        $this->load->view('template/header');
        $this->load->view("main", $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $users = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('main');
        }
        $this->load->view('template/header');
        $this->load->view("user/new_form");
        $this->load->view('template/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('main');

        $user = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('main');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view('template/header');
        $this->load->view("user/edit_form", $data);
        $this->load->view('template/footer');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->user_m->delete($id)) {
            redirect(site_url('main'));
        }
    }
}
