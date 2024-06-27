<!-- Page Heading -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title ?></h1>
        </div>
    </section>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('admin/dataJabatan/tambahDataAksi') ?>">
                        <div class="form-group">
                            <label for="nama_jabatan">Nama jabatan</label>
                            <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" required>
                            <?php echo form_error('nama_jabatan', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="text" id="gaji_pokok" name="gaji_pokok" class="form-control" required>
                            <?php echo form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tj_transport">Tunjangan Transportasi</label>
                            <input type="text" id="tj_transport" name="tj_transport" class="form-control" required>
                            <?php echo form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="uang_makan">Uang Makan</label>
                            <input type="text" id="uang_makan" name="uang_makan" class="form-control" required>
                            <?php echo form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>