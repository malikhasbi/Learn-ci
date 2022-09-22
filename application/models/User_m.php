<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    private $_table = "user";

    public $id;
    public $name;
    public $password;
    public $images = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|trim'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            ]
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        // return $this->db->get_where($this->_table, ["id" => $id])->row();
        // return $this->db->get_where('user', $id)->row_array();
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function save()
    {
        // $this->id = uniqid();
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
