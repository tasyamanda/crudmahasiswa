<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Prodi
                        <form action="<?= base_url('Prodi/update'); ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control"
                                    id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control"
                                    id="ruangan" placeholder="Ruangan">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control"
                                    id="jurusan" placeholder="Jurusan">
                            </div>
                            <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>"
                                    class="form-control" id="akreditasi" placeholder="Akreditasi">
                            </div>
                            <div class="form-group">
                                <label for="nama_kaprodi">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>"
                                    class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                            </div>
                            <div class="form-group">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                    class="form-control" id="tahun_berdiri" placeholder="Tahun_berdiri">
                            </div>
                            <div class="form-group">
                                <label for="output_lulusan">Output Lulusan</label>
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>"
                                    class="form-control" id="Output Lulusan" placeholder="Output Lulusan">
                            </div>
                            <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="update" class="btn btn-primary float-right">Edit
                                Prodi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>