<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <div class="card-header" style="background-color: #808080; color: white; border-radius: 15px 15px 0 0;">
            <h4>Login</h4>
          </div>
          <span class="m-2" style="color: #e74c3c;"><?php echo $this->session->flashdata('pesan') ?></span>
          <div class="card-body">
            <form method="POST" action="<?php echo base_url('auth/login') ?>">
              <div class="form-group">
                <label for="username" class="text-dark">Username</label>
                <input id="username" type="text" class="form-control" name="username" tabindex="1" style="border: 1px solid #808080; border-radius: 5px;">
                <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>
              </div>
              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label text-dark">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" style="border: 1px solid #808080; border-radius: 5px;">
                <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="background-color: #808080; border: none; border-radius: 5px;">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Belum punya akun? <a href="<?php echo base_url('register') ?>" style="color: #2980b9;">Daftar</a>
        </div>
      </div>
    </div>
  </div>
</section>
