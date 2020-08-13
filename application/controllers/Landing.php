<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_login");
        if($this->m_login->logged_id() != TRUE)
		{
            redirect(site_url('login'));
		}
    }
    
    public function index()
    {
        $this->load->view('index-user');
    }
}
