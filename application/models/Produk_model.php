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

    public function get_produk_by_id($id)
    {
        $query = $this->db->get_where('produk', array('id_produk' => $id));
        return $query->result_array();
    }

    public function insert_produk($data)
    {
        $this->db->insert('produk', $data);
        header('Location: ' . base_url('/'));
    }

    public function update_produk($data, $id)
    {
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $data);
        header('Location: ' . base_url('/'));
    }

    public function delete_produk($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
        header('Location: ' . base_url('/'));
    }
}
