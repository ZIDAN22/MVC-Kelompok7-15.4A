

            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h1 class="h4"><?php echo $title ?></h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi')?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_tipe">Tipe Mobil</label>
                                    <select name="kode_tipe" id="kode_tipe" class="form-control">
                                        <option value=""> --Pilih Tipe Mobil--</option>
                                        <?php foreach($tipe as $tp) : ?>
                                            <option value="<?php echo $tp->kode_tipe ?>">
                                                <?php echo $tp->nama_tipe  ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" name="merk" id="merk" class="form-control">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_plat">No. Plat</label>
                                    <input type="text" name="no_plat" id="no_plat" class="form-control">
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="warna">Warna</label>
                                    <input type="text" name="warna" id="warna" class="form-control">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>

                            
                            
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Sewa/Hari</label>
                                    <input type="number" name="harga" class="form-control">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Denda</label>
                                    <input type="number" name="denda" class="form-control">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                            </div>

                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">--Pilih Status--</option>
                                        <option value="1">Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
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
                </div>
            </div>
        </section>
    </div>