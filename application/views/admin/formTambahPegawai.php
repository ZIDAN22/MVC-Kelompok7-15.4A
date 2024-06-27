<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title ?></h1>
        </div>
    </section>

    <div class="card shadow" style="width: 60%; margin: 20px auto;">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/DataPegawai/tambahDataAksi') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" id="nik" name="nik" class="form-control" required>
                    <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" required>
                    <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select id="jabatan" name="jabatan" class="form-control" required>
                        <option value="">--Pilih Jabatan--</option>
                        <?php foreach ($jabatan as $j) : ?>
                            <option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" required>
                    <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="">--Pilih status--</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
                    </select>
                    <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" name="photo" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>