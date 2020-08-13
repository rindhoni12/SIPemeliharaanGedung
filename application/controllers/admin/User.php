<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->model("m_login");
        $this->load->library('form_validation');
        if($this->m_login->is_role() != "admin"){
			redirect(site_url('login'));
		}
    }

    public function index()
    {
        $data["tbl_user"] = $this->m_user->getAll();
        $this->load->view("admin/user/v_daftaruser", $data);
    }

    public function add()
    {
        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data user berhasil ditambah');
            redirect(site_url('admin/user'));
        }

        $this->load->view("admin/user/v_tambahuser");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user');
    
        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rulesupdate());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Data user berhasil diubah');
            redirect(site_url('admin/user'));
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/user/v_ubahuser", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_user->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }
}