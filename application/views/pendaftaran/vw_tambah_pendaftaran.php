<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Pendaftaran PCR
                        <form action="<?= base_url('Pendaftaran/upload'); ?>" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="nisn">
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="no_wa">No Whatsapp</label>
                                <input type="text" name="no_wa" class="form-control" id="no_wa">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            </div>
                            <div class="form-group">
                                <label for="kab_tgl">Kabupaten Tinggal</label>
                                <input type="text" name="kab_tgl" class="form-control" id="kab_tgl">
                            </div>
                            <div class="form-group">
                                <label for="kec_tgl">Kecamatan Tinggal</label>
                                <input type="text" name="kec_tgl" class="form-control" id="Output kec_tgl">
                            </div>
                            <div class="form-group">
                                <label for="kab_sklh">Kabupaten Sekolah</label>
                                <input type="text" name="kab_sklh" class="form-control" id="kab_sklh">
                            </div>
                            <div class="form-group">
                                <label for="sekolah_asal">Sekolah Asal</label>
                                <input type="text" name="sekolah_asal" class="form-control" id="sekolah_asal">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan">
                            </div>
                            <div class="form-group">
                                <label for="tahun_lulus">Tahun Lulus</label>
                                <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus">
                            </div>
                            <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>