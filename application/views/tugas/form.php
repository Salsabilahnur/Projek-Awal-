<div class="container">
    <div class="row">
        <div class="col-6">
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('tugas/tambah'); ?>" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input name="nim" type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa">
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Kelas">
                </div>

                <div class="mb-3">
                    <label for="ttl" class="form-label">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="date" class="form-control" id="ttl">
                </div>

                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempatLahir" placeholder="Kelas">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
                        <label class="form-check-label" for="laki-laki">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="">Agama</label>
                    <select name="agama" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>