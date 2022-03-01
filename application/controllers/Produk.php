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

    public function create()
    {
        $this->load->view('produk/produk_add');
    }

    public function save()
    {
        $data['id_produk'] = null;
        $data['title'] = $this->input->post('title');
        $data['price'] = $this->input->post('price');

        $this->produk_model->insert_produk($data);
    }

    public function delete($id)
    {
        $this->produk_model->apus_pproduk($id);
    }
}