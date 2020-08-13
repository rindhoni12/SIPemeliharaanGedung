<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gedungb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_gedungb");
        $this->load->model('m_login');
        if($this->m_login->logged_id() != TRUE)
        {
          redirect(site_url('login'));
        }
    }

    public function index()
    {
        $this->load->view("admin/laporan/gedungb/v_daftarlantai");
    }

    public function lantai1()
    {
      $data["tbl_laporan"] = $this->m_gedungb->GB_L1();
      $this->load->view("admin/laporan/gedungb/v_lantai1", $data);
    }

    public function lantai2()
    {
      $data["tbl_laporan"] = $this->m_gedungb->GB_L2();
      $this->load->view("admin/laporan/gedungb/v_lantai2", $data);
    }
    
    public function lantai3()
    {
      $data["tbl_laporan"] = $this->m_gedungb->GB_L3();
      $this->load->view("admin/laporan/gedungb/v_lantai3", $data);
    }
    
    public function lantai4()
    {
      $data["tbl_laporan"] = $this->m_gedungb->GB_L4();
      $this->load->view("admin/laporan/gedungb/v_lantai4", $data);
    }
    public function lantai5()
    {
      $data["tbl_laporan"] = $this->m_gedungb->GB_L5();
      $this->load->view("admin/laporan/gedungb/v_lantai5", $data);
    }
}