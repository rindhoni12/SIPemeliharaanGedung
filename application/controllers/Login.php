<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_login');
  }

  public function index()
  {
    if($this->m_login->logged_id())
    {
      redirect("landing");
    }
    else
    {
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      $this->form_validation->set_message('required', '<div class="alert alert-danger bg-danger text-white border-0 fade show" role="alert" style="margin-top: 3px">
          <div class="header"><i class="fa fa-exclamation-circle"></i> {field} harus diisi</div></div>');

      if ($this->form_validation->run() == TRUE) 
      {
          $email = $this->input->post("email", TRUE);
          $password = MD5($this->input->post('password', TRUE));

          $checking = $this->m_login->check_login('tbl_user', array('email' => $email), array('password' => $password));

          if ($checking != FALSE) 
          {
            foreach ($checking as $apps) {
              $session_data = array(
                'user_id'   => $apps->id_user,
                'user_nama' => $apps->nama_user,
                'email' => $apps->email,
                'user_pass' => $apps->password,
                'role'      => $apps->role
              );
              $this->session->set_userdata($session_data);
              
              if($this->session->userdata("role") == "admin")
              {
                redirect('admin/landing');
              }
              else
              {
                redirect('member/landing');
              }
              
            }
          }
          else{
            $data['error'] = '<div class="alert alert-danger bg-danger text-white border-0 fade show" role="alert" style="margin-top: 3px">
                <div class="header"><i class="fa fa-exclamation-circle"></i> ERROR - username atau password salah!</div></div>';
            $this->load->view('v_login', $data);
          }
      }
      else
      {
        $this->load->view('v_login');
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(site_url('login'));
  }
}