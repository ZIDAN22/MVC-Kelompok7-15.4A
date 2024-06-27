<body>
    <div class="container mt-5">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h1 class="h4">Form Tambah Tipe Mobil</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_tipe/tambah_tipe_aksi')?>">
                    <div class="form-group">
                        <label for="kode_tipe">Kode Tipe</label>
                        <input type="text" name="kode_tipe" id="kode_tipe" class="form-control">
                        <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_tipe">Nama Tipe</label>
                        <input type="text" name="nama_tipe" id="nama_tipe" class="form-control">
                        <?php echo form_error('nama_tipe','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
