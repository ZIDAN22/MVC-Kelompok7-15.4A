<style>
  .container-custom {
    margin-top: 200px;
    margin-bottom: 200px; 
    padding-left: 15px; 
    padding-right: 15px; 
  }
</style>

<div class="container-custom">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <?php foreach ($detail as $dt) : ?>
          <div class="row">
            <div class="col-md-5">
              <img class="img-fluid" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" alt="Gambar Mobil">
            </div>
            <div class="col-md-7">
              <table class="table">
                <tr>
                  <th style="width: 30%;">Merk</th>
                  <td>: <?php echo $dt->merk ?></td>
                </tr>
                <tr>
                  <th>Nomor plat</th>
                  <td>: <?php echo $dt->no_plat ?></td>
                </tr>
                <tr>
                  <th>Tahun Produksi</th>
                  <td>: <?php echo $dt->tahun ?></td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>: 
                    <?php echo ($dt->status == '1') ? 'Tersedia' : 'Tidak Tersedia/sedang dirental'; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <?php if ($dt->status == '0') : ?>
                      <span class='btn btn-danger' disabled>Telah di Rental</span>
                    <?php else : ?>
                      <?php echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '<button class="btn btn-success">Rental</button>'); ?>
                    <?php endif; ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>