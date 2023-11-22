<div class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url('Pendaftaran/tambah') ?>" class="btn btn-info mb-2">Tambah Data Pendaftaran</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NISN</td>
                            <td>NIK</td>
                            <td>Email</td>
                            <td>No HP</td>
                            <td>No WA</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Jenis Kelamin</td>
                            <td>Kabupaten Tinggal</td>
                            <td>Kecamatan Tinggal</td>
                            <td>Kabupaten Sekolah</td>
                            <td>Sekolah Asal</td>
                            <td>Jurusan</td>
                            <td>Tahun Lulus</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendaftaran as $us) : ?>
                            <tr>
                                <td><?= $i; ?>. </td>
                                <td><?= $us['nama']; ?>.</td>
                                <td><?= $us['nisn']; ?>.</td>
                                <td><?= $us['nik']; ?>.</td>
                                <td><?= $us['email']; ?>.</td>
                                <td><?= $us['no_hp']; ?></td>
                                <td><?= $us['no_wa']; ?>.</td>
                                <td><?= $us['tempat_lahir']; ?>.</td>
                                <td><?= $us['tanggal_lahir']; ?>.</td>
                                <td><?= $us['jenis_kelamin']; ?></td>
                                <td><?= $us['kab_tgl']; ?>.</td>
                                <td><?= $us['kec_tgl']; ?>.</td>
                                <td><?= $us['kab_sklh']; ?>.</td>
                                <td><?= $us['sekolah_asal']; ?></td>
                                <td><?= $us['jurusan']; ?>.</td>
                                <td><?= $us['tahun_lulus']; ?>.</td>
                                <td>
                                    <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>