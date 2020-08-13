<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model
{
    private $_table = "tbl_user";

    public $id_user;
    public $nama_user;
    public $email;
    public $password;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama User',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email User',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password User',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Role User',
            'rules' => 'required'],
        ];
    }

    public function rulesupdate()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama User',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email User',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Role User',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama_user = $post["nama_user"];
        $this->email = $post["email"];
        $this->password = MD5($post["password"]);
        $this->role = $post["role"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->nama_user = $post["nama_user"];
        $this->email = $post["email"];
        if (!empty($_POST['password'])) {
            $this->password = MD5($post["password"]);
        } else {
            $this->password = $post["password_lama"];
        }
        $this->role = $post["role"];
        return $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}