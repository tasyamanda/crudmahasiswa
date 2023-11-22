<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['user'] = ['email' => 'user@example.com'];
        $data['prodi'] = [
            [
                'nama' => 'Prodi 1',
                'ruangan' => 'Ruang 101',
                'jurusan' => 'Jurusan A',
                'akreditasi' => 'A',
                'nama_kaprodi' => 'John Doe',
                'tahun_berdiri' => '2000',
                'output_lulusan' => '500'
            ],
            [
                'nama' => 'Prodi 2',
                'ruangan' => 'Ruang 102',
                'jurusan' => 'Jurusan B',
                'akreditasi' => 'B',
                'nama_kaprodi' => 'Jane Smith',
                'tahun_berdiri' => '2005',
                'output_lulusan' => '300'
            ]
        ];
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }
    // Rest of the code remains the same
}
