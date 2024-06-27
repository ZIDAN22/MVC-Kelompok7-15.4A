<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Customer</h1>
            </div>
        </section>

        <div class="card border-primary">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                        <?php echo form_error('nama', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                        <?php echo form_error('username', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control">
                        <?php echo form_error('alamat', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="">--Pilih Gender--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control">
                        <?php echo form_error('no_telepon', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No. KTP</label>
                        <input type="text" id="no_ktp" name="no_ktp" class="form-control">
                        <?php echo form_error('no_ktp', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                        <?php echo form_error('password', '<span class="text-small text-danger">','</span>') ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>