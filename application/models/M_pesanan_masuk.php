<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model
{

    public function pesanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order=0');
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function pesanan_diproses()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order=1');
        $this->db->order_by('id_transaksi', 'desc');        
        return $this->db->get()->result();
    }

    public function pesanan_dikirim()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order=2');
        $this->db->order_by('id_transaksi', 'desc');     
        return $this->db->get()->result();
    }

    public function pesanan_diterima()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order=3');
        $this->db->order_by('id_transaksi', 'desc');     
        return $this->db->get()->result();
    }

    public function update_order($data)
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->update('tbl_transaksi', $data);
    }

    public function delete_pesanan($data)
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->delete('tbl_transaksi', $data);
    }
}

/* End of file M_pesanan_masuk.php */
