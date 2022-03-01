<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
    }

    public function index()
    {
        $data['produk'] = $this->produk_model->get_produk_all();

        $this->load->view('produk/produk_list', $data);
    }

    public function save()
    {
        $data['id_barang'] = $this->input->post('id_barang');
        $data['kategori'] = $this->input->post('kategori');
        $data['uraian_penggunaan'] = $this->input->post('uraian_penggunaan');
        $data['jumlah'] = $this->input->post('jumlah');
        $data['total'] = $this->input->post('total');

        $this->penjualan_model->insert_penjualan($data);
    }

    public function delete($id)
    {
        $this->penjualan_model->hapus_penjualan($id);
    }
}