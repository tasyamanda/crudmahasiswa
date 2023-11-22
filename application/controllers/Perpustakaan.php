<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Perpustakaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perpustakaan_model');
    }
    public function index()
    {
        $data['judul'] = "Dashboard Perpustakaan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['perpustakaan'] = $this->Perpustakaan_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("perpustakaan/vw_perpustakaan", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah(){
        $data['judul'] = "Dashboard Pinjam Buku";
        $this->load->view("layout/header", $data);
        $this->load->view("perpustakaan/vw_tambah_perpustakaan", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Perpustakaan_model->delete($id);
        redirect('Perpustakaan');
    }
    public function upload()
    {
        $data = [
            'nama_buku' => $this->input->post('nama_buku'),
            'genre_buku' => $this->input->post('genre_buku'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
        ];
        $this->Perpustakaan_model->insert($data);
        redirect('Perpustakaan');
    }
    public function edit($id)
    {
        $data['judul'] = "Dashboard Edit Perpustakaan";
        $data['perpustakaan']= $this->Perpustakaan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("perpustakaan/vw_ubah_perpustakaan", $data);
        $this->load->view("layout/footer", $data);
    }
    public function update()
    {
        $data = [
            'nama_buku' => $this->input->post('nama_buku'),
            'genre_buku' => $this->input->post('genre_buku'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
            'nomor_anggota' => $this->input->post('nomor_anggota'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
        ];
        $id = $this->input->post('id');
        $this->Perpustakaan_model->update(['id' =>$id], $data);
        redirect('Perpustakaan');
    }
}
?>