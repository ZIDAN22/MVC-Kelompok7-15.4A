<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <section class="section">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card shadow-lg">
            <div class="card-header bg-secondary text-white text-center">
              <h4>Register</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="<?php echo base_url('register')?>">
                <div class="row">
                  <div class="form-group col-6">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" class="form-control" name="nama" autofocus>
                    <?php echo form_error('nama','<div class="text-small text-danger">','</div>')?> 
                  </div>
                  <div class="form-group col-6">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>')?> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input id="alamat" type="text" class="form-control" name="alamat">
                  <?php echo form_error('alamat','<div class="text-small text-danger">','</div>')?> 
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="gender" class="d-block">Gender</label>
                    <select class="form-control" name="gender">
                      <option value="">--Pilih Gender---</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                    <?php echo form_error('gender','<div class="text-small text-danger">','</div>')?> 
                  </div>
                  <div class="form-group col-6">
                    <label for="no_telepon" class="d-block">No. Telepon</label>
                    <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                    <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>')?> 
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" class="form-control">
                    <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>')?> 
                  </div>
                  <div class="form-group col-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <?php echo form_error('password','<div class="text-small text-danger">','</div>')?> 
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-secondary btn-lg btn-block">Register</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
           Sudah memiliki akun?  <a href="<?php echo base_url('auth/login')?>" class="text-primary">Masuk disini</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
