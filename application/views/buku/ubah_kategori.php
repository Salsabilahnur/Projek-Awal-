<div <div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div> class="alert alert-danger alert-message" role="alert">Nama Kategori Tidak Boleh Kosong</div>)');
                redirect('buku/ubahkategori/' . $k['id']);
            } ?>

            <?php foreach ($kategori as $k) { ?>
                <form action="<?= base_url('buku/ubahkategori/'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $k['id_kategori']; ?>">
                        <input type="text" class="form-control form-control-user" name="nama_kategori" id="nama_kategori" value="<?php echo $k['nama_kategori']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" onclick="window.histori.go(-1)">Kembali</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            <?php } ?>
        </div>
    </div>