<div class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url('Prodi/tambah') ?>" class="btn btn-info mb-2">Tambah Prodi</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Prodi</td>
                            <td>Ruangan</td>
                            <td>Jurusan</td>
                            <td>Akreditasi</td>
                            <td>Nama Kaprodi</td>
                            <td>Tahun Berdiri</td>
                            <td>Output Lulusan</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;?>
                        <?php foreach($prodi as $us): ?>
                        <tr>
                            <td><?=$i; ?>. </td>
                            <td><?=$us['nama']; ?>.</td>
                            <td><?=$us['ruangan']; ?>.</td>
                            <td><?=$us['jurusan']; ?>.</td>
                            <td><?=$us['akreditasi']; ?>.</td>
                            <td><?=$us['nama_kaprodi']; ?></td>
                            <td><?=$us['tahun_berdiri']; ?>.</td>
                            <td><?=$us['output_lulusan']; ?>.</td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id'];?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>