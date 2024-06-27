<body>
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Form Update Tipe Mobil</h1>
            </div>
        </div>

        <?php foreach ($tipe as $tp) : ?>
        <form method="POST" action="<?php echo base_url('admin/data_tipe/update_tipe_aksi')?>">
            <div class="card border-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_tipe">Kode Tipe</label>
                        <input type="hidden" name="id_tipe" value="<?php echo $tp->id_tipe ?>">
                        <input type="text" name="kode_tipe" id="kode_tipe" class="form-control" value="<?php echo $tp->kode_tipe ?>">
                        <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_tipe">Nama Tipe</label>
                        <input type="text" name="nama_tipe" id="nama_tipe" class="form-control" value="<?php echo $tp->nama_tipe ?>">
                        <?php echo form_error('nama_tipe','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
        
    </div>
