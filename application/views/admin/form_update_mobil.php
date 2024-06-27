<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Update Data Mobil</h1>
            </div>

            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h1 class="h4">Form Update Data Mobil</h1>
                </div>
                <div class="card-body">
                    <?php foreach ($mobil as $mb): ?>
                    <form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi')?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_tipe">Tipe Mobil</label>
                                    <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                                    <select name="kode_tipe" id="kode_tipe" class="form-control">
                                        <option value="<?php echo $mb->kode_tipe ?>"><?php echo $mb->kode_tipe ?></option>
                                        <?php foreach($tipe as $tp) : ?>
                                            <option value="<?php echo $tp->kode_tipe ?>">
                                                <?php echo $tp->nama_tipe ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" name="merk" id="merk" class="form-control" value="<?php echo $mb->merk ?>">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_plat">No. Plat</label>
                                    <input type="text" name="no_plat" id="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="warna">Warna</label>
                                    <input type="text" name="warna" id="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                                
                            
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="harga">Harga Sewa/Hari</label>
                                    <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="warna">Denda</label>
                                    <input type="text" name="denda" id="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" <?php if($mb->status == "1") echo "selected"; ?>>Tersedia</option>
                                        <option value="0" <?php if($mb->status == "0") echo "selected"; ?>>Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
