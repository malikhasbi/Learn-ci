<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("gallery_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'gallery' => $this->gallery_m->getAllJoin(),
            'category' => $this->db->get('category')->result_array(),
        );


        $this->load->view('template/header', $data);
        $this->load->view('gallery/gallery', $data);
        $this->load->view('template/footer');
    }


    function select_validate($abcd)
    {
        if ($abcd == "0") {
            $this->form_validation->set_message('select_validate', 'Please Select Your Category.');
            return false;
        } else {
            return true;
        }
    }

    public function newImage()
    {
        $this->load->library('form_validation');
        $data = array(
            // 'gallery' => $this->db->get('gallery')->result_array(),
            'category' => $this->db->get('category')->result_array(),
            'error' => ' ',
        );
        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|trim|min_length[4]'
            ),
            array(
                'field' => 'category',
                'label' => 'Category',
                'rules' => 'required|callback_select_validate'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('gallery/newImage', $data);
            $this->load->view('template/footer');
        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config = array(
                    'upload_path' => './assets/upload/image/',
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 100000,
                );

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // echo 'true valid, true img, all true, try to send';
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }
            }

            $data = [
                'name' => htmlspecialchars($this->input->POST('name', true)),
                'category' => htmlspecialchars($this->input->POST('category', true)),
            ];
            $this->db->insert('gallery', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your data has been uploaded. Please Check it!</div>');
            redirect('gallery');
        }
    }

    public function add()
    {
    }
}
