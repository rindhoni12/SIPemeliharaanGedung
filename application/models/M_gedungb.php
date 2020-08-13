<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_gedungb extends CI_Model
{
    public function GB_L1()
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
                                    WHERE tbl_laporan.gedung = 'B' && tbl_laporan.lantai = '1'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GB_L2()
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
                                    WHERE tbl_laporan.gedung = 'B' && tbl_laporan.lantai = '2'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GB_L3()
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
                                    WHERE tbl_laporan.gedung = 'B' && tbl_laporan.lantai = '3'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    
    public function GB_L4()
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
                                    WHERE tbl_laporan.gedung = 'B' && tbl_laporan.lantai = '4'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
    public function GB_L5()
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
                                    WHERE tbl_laporan.gedung = 'B' && tbl_laporan.lantai = '5'
                                    GROUP BY tbl_uraian.id_laporan"
                                );
        return $query->result();
    }
}