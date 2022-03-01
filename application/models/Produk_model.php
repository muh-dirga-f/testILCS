<?php
class Produk_model extends CI_Model
{

    public $title;
    public $content;
    public $date;

    public function get_produk_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function insert_produk($data)
    {
        $this->db->insert('produk', $data);
        header('Location: ' . base_url('/'));
    }

    public function delete_produk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
        header('Location: ' . base_url('/'));
    }
}
