<?php
$simpan = [16];
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['user'] = ['email' => 'admin@gmail.com'];
        $data['pendaftaran'] = [
            [
                'id' => '1',
                'nama' => 'Tasya',
                'nisn' => '141516',
                'nik' => '1471121314151617',
                'email' => 'tasya@mahasiswa.pcr.ac.id',
                'no_hp' => '081234567890',
                'no_wa' => '081234567890',
                'tempat_lahir' => 'Pekanbaru',
                'tanggal_lahir' => '3 Januari 2003',
                'jenis_kelamin' => 'Perempuan',
                'kab_tgl' => 'Pekanbaru',
                'kec_tgl' => 'Rumbai Pesisir',
                'kab_sklh' => 'Pekanbaru',
                'sekolah_asal' => 'SMKN 7 Pekanbaru',
                'jurusan' => 'Teknik Informatika',
                'tahun_lulus' => '2026',
            ],
            [
                'id' => '2',
                'nama' => 'Nopal',
                'nisn' => '171819',
                'nik' => '1321456782197236',
                'email' => 'nopal@mahasiswa.pcr.ac.id',
                'no_hp' => '081255436789',
                'no_wa' => '081255436789',
                'tempat_lahir' => 'Pekanbaru',
                'tanggal_lahir' => '19 Januari 2004',
                'jenis_kelamin' => 'Laki-Laki',
                'kab_tgl' => 'Pekanbaru',
                'kec_tgl' => 'Rumbai Pesisir',
                'kab_sklh' => 'Pekanbaru',
                'sekolah_asal' => 'SMKS Muhammadiyah 2 Pekanbaru',
                'jurusan' => 'Teknik Informatika',
                'tahun_lulus' => '2026',
            ]
        ];
        $this->load->view("layout/pendaftaran_header", $data);
        $this->load->view("pendaftaran/vw_pendaftaran", $data);
        $this->load->view("layout/pendaftaran_footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pendaftaran";
        $this->load->view("layout/pendaftaran_header", $data);
        $this->load->view("pendaftaran/vw_tambah_pendaftaran", $data);
        $this->load->view("layout/pendaftaran_footer", $data);
    }
    public function hapus($id)
    {
        // $this->Pendaftaran_model->delete($id);
        redirect('Prodi');
    }
    public function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'no_wa' => $this->input->post('no_wa'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kab_tgl' => $this->input->post('kab_tgl'),
            'kec_tgl' => $this->input->post('kec_tgl'),
            'kab_sklh' => $this->input->post('kab_sklh'),
            'sekolah_asal' => $this->input->post('sekolah_asal'),
            'jurusan' => $this->input->post('jurusan'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
        ];
        $this->simpan->insert($data);
        return $this->simpan->insert_id();
        redirect('Pendaftaran');
    }
}
