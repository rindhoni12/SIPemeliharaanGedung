<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gedunga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_gedunga");
        $this->load->model('m_login');
        if($this->m_login->logged_id() != TRUE)
        {
          redirect(site_url('login'));
        }
    }

    public function index()
    {
        $this->load->view("admin/laporan/gedunga/v_daftarlantai");
    }

    public function lantai1()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L1();
      $this->load->view("admin/laporan/gedunga/v_lantai1", $data);
    }

    public function lantai2()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L2();
      $this->load->view("admin/laporan/gedunga/v_lantai2", $data);
    }
    
    public function lantai3()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L3();
      $this->load->view("admin/laporan/gedunga/v_lantai3", $data);
    }
    
    public function lantai4()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L4();
      $this->load->view("admin/laporan/gedunga/v_lantai4", $data);
    }
    
    public function lantai5()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L5();
      $this->load->view("admin/laporan/gedunga/v_lantai5", $data);
    }
    
    public function lantai6()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L6();
      $this->load->view("admin/laporan/gedunga/v_lantai6", $data);
    }
    
    public function lantai7()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L7();
      $this->load->view("admin/laporan/gedunga/v_lantai7", $data);
    }
    
    public function lantai8()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L8();
      $this->load->view("admin/laporan/gedunga/v_lantai8", $data);
    }
    
    public function lantai9()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L9();
      $this->load->view("admin/laporan/gedunga/v_lantai9", $data);
    }
    
    public function lantai10()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L10();
      $this->load->view("admin/laporan/gedunga/v_lantai10", $data);
    }
    
    public function lantai11()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L11();
      $this->load->view("admin/laporan/gedunga/v_lantai11", $data);
    }
    
    public function lantai12()
    {
      $data["tbl_laporan"] = $this->m_gedunga->GA_L12();
      $this->load->view("admin/laporan/gedunga/v_lantai12", $data);
    }
}