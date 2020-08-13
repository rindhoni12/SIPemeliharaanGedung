<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_gedunga extends CI_Model
{
    public function GA_L1()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '1'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L2()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '2'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L3()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '3'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L4()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '4'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L5()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '5'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L6()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '6'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L7()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '7'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L8()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '8'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L9()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '9'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GA_L10()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '10'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();;
    }
    
    public function GA_L11()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '11'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();;
    }
    
    public function GA_L12()
    {
        $query = $this->db->query("SELECT
                                    tbl_laporan.id_laporan,
                                    tbl_laporan.tgl_pelaksanaan,
                                    tbl_laporan.tgl_pelaksanaan_berikutnya,
                                    tbl_laporan.lokasi,
                                    tbl_laporan.elemen_gedung,
                                    tbl_laporan.penyedia_jasa,
                                    tbl_laporan.status,
                                    sum(tbl_uraian.harga_pekerjaan) as jumlah
                                    FROM tbl_laporan
                                    LEFT  JOIN tbl_uraian on tbl_laporan.id_laporan = tbl_uraian.id_laporan
                                    WHERE tbl_laporan.gedung = 'A' && tbl_laporan.lantai = '12'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();;
    }    
}