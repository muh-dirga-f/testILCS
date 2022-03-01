<?php
class Penjualan_model extends CI_Model
{

    public $title;
    public $content;
    public $date;

    public function get_kategori()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    public function get_barang()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    public function get_penjualan()
    {
        $query = $this->db->join('barang', 'penjualan.id_barang = barang.id_barang', 'left')->get('penjualan');
        return $query->result_array();
    }

    public function insert_penjualan($data)
    {
        $this->db->insert('penjualan', $data);
        header('Location: ' . base_url('/'));
    }

    public function hapus_penjualan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penjualan');
        header('Location: ' . base_url('/'));
    }
}
