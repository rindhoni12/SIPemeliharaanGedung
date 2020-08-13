<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_uraianlaporan extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'tgl_pelaksanaan',
            'label' => 'Tgl Pelaksanaan',
            'rules' => 'required'],

            ['field' => 'tgl_pelaksanaan_berikutnya',
            'label' => 'Tgl Pelaksanaan Berikutnya',
            'rules' => 'required'],

            ['field' => 'elemen_gedung',
            'label' => 'Elemen Gedung',
            'rules' => 'required'],

            ['field' => 'penyedia_jasa',
            'label' => 'Penyedia Jasa',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],

            ['field' => 'gedung',
            'label' => 'Gedung',
            'rules' => 'required'],

            ['field' => 'lantai',
            'label' => 'Lantai',
            'rules' => 'required'],
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where('tbl_laporan', ["id_laporan" => $id])->row();
    }

    public function save()
    {
        $juml_uraian = 1;
        for ($i = 1; $i <= $this->input->post('total_uraian'); $i++) {
            $juml_uraian = $i;
        }

        for ($i = 1; $i <= $juml_uraian; $i++) {
            $this->insertIntoUraian(
                $this->input->post('id_laporan'),
                $this->input->post('uraian_pekerjaan'.$i), 
                $this->input->post('volume_pekerjaan'.$i), 
                $this->input->post('harga_pekerjaan'.$i), 
                $this->input->post('mulai_pekerjaan'.$i), 
                $this->input->post('selesai_pekerjaan'.$i)
            );
        }
        
        $data = array(
            'id_laporan'                  => $this->input->post('id_laporan'),
            'tgl_pelaksanaan'             => $this->input->post('tgl_pelaksanaan'),
            'tgl_pelaksanaan_berikutnya'  => $this->input->post('tgl_pelaksanaan_berikutnya'),
            'elemen_gedung'               => $this->input->post('elemen_gedung'),
            'penyedia_jasa'               => $this->input->post('penyedia_jasa'),
            'status'                      => $this->input->post('status'),
            'gedung'                      => $this->input->post('gedung'),
            'lantai'                      => $this->input->post('lantai'),
        );
        $this->db->insert('tbl_laporan',$data);
    }

    private function insertIntoUraian($id, $uraian, $volume, $harga, $mulai, $selesai)
    {
        $data = array(
            'id_laporan' => $id,
            'uraian_pekerjaan' => $uraian,   
            'volume_pekerjaan' => $volume,
            'harga_pekerjaan' => $harga,   
            'mulai_pekerjaan' => $mulai,
            'selesai_pekerjaan' => $selesai
        );  
        return $this->db->insert('tbl_uraian', $data);
    }

    public function update($id)
    {
        $where = array('id_laporan' => $id );
        $data = array(
            // 'id_laporan'                  => $this->input->post('id_laporan'),
            'tgl_pelaksanaan'             => $this->input->post('tgl_pelaksanaan'),
            'tgl_pelaksanaan_berikutnya'  => $this->input->post('tgl_pelaksanaan_berikutnya'),
            'elemen_gedung'               => $this->input->post('elemen_gedung'),
            'penyedia_jasa'               => $this->input->post('penyedia_jasa'),
            'status'                      => $this->input->post('status'),
            'gedung'                      => $this->input->post('gedung'),
            'lantai'                      => $this->input->post('lantai'),
        );

        $this->db->where($where);
        $this->db->update('tbl_laporan',$data);

        for ($i = 0; $i < $this->countUraian($id)->jumlah_laporan; $i++) 
        {
            $this->updateIntoUraian(
                $id,
                $this->input->post('uraian_pekerjaan'.$i), 
                $this->input->post('volume_pekerjaan'.$i), 
                $this->input->post('harga_pekerjaan'.$i), 
                $this->input->post('mulai_pekerjaan'.$i), 
                $this->input->post('selesai_pekerjaan'.$i)
            );
        }
    }

    private function updateIntoUraian($id, $uraian, $volume, $harga, $mulai, $selesai)
    {
        $where = array(
            'id_laporan' => $id
        );
        $data = array(
            // 'id_laporan' => $id,
            'uraian_pekerjaan' => $uraian,   
            'volume_pekerjaan' => $volume,
            'harga_pekerjaan' => $harga,   
            'mulai_pekerjaan' => $mulai,
            'selesai_pekerjaan' => $selesai
        );  
        $this->db->where($where);
        return $this->db->update('tbl_uraian', $data);
    }
    
    function kode_laporan_gen($field, $table, $prefix, $length)
    {
        global $db;
        $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");
        $var = $var->row_array()[$field];
        if ($var) {
            return $prefix . substr(str_repeat('0', $length) . (substr($var, -$length) + 1), -$length);
        } else {
            return $prefix . str_repeat('0', $length - 1) . 1;
        }
    }

    public function getDetailUraian($id)
    {
        return $query = $this->db->get_where('tbl_uraian', array('id_laporan' => $id))->result();
    }

    public function delete($id)
    {
        $this->db->delete('tbl_uraian', array("id_laporan" => $id));
        return $this->db->delete('tbl_laporan', array("id_laporan" => $id));
    }

    function getSelectedUraian($id)
    {
        $where = array(
            'id_laporan' => $id
        );

        $query = $this->db->from('tbl_uraian')->where($where)->get();
        return $query->result();
    }

    public function countUraian($id)
    {     
        $query = $this->db->query("SELECT count(id_laporan) as jumlah_laporan FROM tbl_uraian WHERE id_laporan = '$id'");
        return $query->row();
    }

    public function search($search)
    {
        $this->db->select('*');
        $this->db->from('tbl_laporan');

        $this->db->like('tgl_pelaksanaan',$search);
        $this->db->or_like('elemen_gedung',$search);
        $this->db->or_like('penyedia_jasa',$search);
        $this->db->or_like('status',$search);
        
        $query = $this->db->get();
        return $query->result();
    }
}