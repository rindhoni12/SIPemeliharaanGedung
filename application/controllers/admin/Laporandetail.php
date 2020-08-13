<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporandetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_uraianlaporan");
        $this->load->model('m_login');
        $this->load->library('form_validation');
        
        if($this->m_login->logged_id() != TRUE)
		{
            redirect(site_url('login'));
		}
    }

    public function getById($id)
    {
        return $this->db->get_where('tbl_laporan', ["id_laporan" => $id])->row();
    }

    public function index()
    {
        $this->load->view("admin/laporan/v_daftargedung");
    }

    public function add()
    {
        $laporan = $this->m_uraianlaporan;
        $validation = $this->form_validation;
        $validation->set_rules($laporan->rules());

        if ($validation->run()) {
            $laporan->save();
            // $this->session->set_flashdata('success', 'Data laporan berhasil ditambah');
            echo "<script language=\"javascript\">javascript:history.go(-2);</script>";
        }

        $data['kode'] = $this->m_uraianlaporan->kode_laporan_gen('id_laporan', 'tbl_laporan', 'L',3);
        $this->load->view("admin/laporan/v_tambahlaporan", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/laporandetail');

        $laporan = $this->m_uraianlaporan;
        $validation = $this->form_validation;
        $validation->set_rules($laporan->rules());

        
        if ($validation->run()) {
            $laporan->update($id);
            // $this->session->set_flashdata('success', 'Data laporan berhasil diubah');
            echo "<script language=\"javascript\">javascript:history.go(-2);</script>";
        }

        $data['uraian'] = $this->m_uraianlaporan->getSelectedUraian($id);
        $data['juml'] = $laporan->countUraian($id);
        $data["laporan"] = $laporan->getById($id);
        if (!$data["laporan"]) show_404();
        
        
        $this->load->view("admin/laporan/v_ubahlaporan", $data);
    }

    public function search()
    {
        $search = $this->input->post('search');

        switch (strtolower($search)) {
            case "januari":
                $search = "-01-";
                break;
            case "febuari":
                $search = "-02-";
                break;
            case "maret":
                $search = "-03-";
                break;
            case "april":
                $search = "-04-";
                break;
            case "mei":
                $search = "-05-";
                break;
            case "juni":
                $search = "-06-";
                break;
            case "juli":
                $search = "-07-";
                break;
            case "agustus":
                $search = "-08-";
                break;
            case "september":
                $search = "-09-";
                break;
            case "oktober":
                $search = "-10-";
                break;
            case "november":
                $search = "-11-";
                break;
            case "desember":
                $search = "-12-";
                break;
            default:
                $search = $this->input->post('search');
        }

        $data['users'] =  $this->m_uraianlaporan->search($search);
        $this->load->view("admin/laporan/v_pencarianlaporan", $data);
    }

    public function detail($id=null)
    {
        if (!isset($id)) show_404();

        $data['tbl_uraian'] = $this->m_uraianlaporan->getDetailUraian($id);
        $this->load->view("admin/laporan/v_detaillaporan", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_uraianlaporan->delete($id)) {
            echo "<script language=\"javascript\">javascript:history.go(-2);</script>";
        }
    }

    public function gedunga()
    {
        $this->load->view("admin/laporan/gedunga/v_daftarlantai");
    }

    public function gedungb()
    {
        $this->load->view("admin/laporan/gedungb/v_daftarlantai");
    }

    public function gedungc()
    {
        $this->load->view("admin/laporan/gedungc/v_daftarlantai");
    }

    public function gedungd()
    {
        $this->load->view("admin/laporan/gedungd/v_daftarlantai");
    }

    public function gedunge()
    {
        $this->load->view("admin/laporan/gedunge/v_daftarlantai");
    }

    public function gedungf()
    {
        $this->load->view("admin/laporan/gedungf/v_daftarlantai");
    }
}