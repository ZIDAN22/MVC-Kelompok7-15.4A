<div class="main-content">
               <section class="section">
                      <div class="section-header">
                           <h1><?php echo $title ?></h1>
                       </div>
               </section>
        </div>
                   
<div class="card" style="width : 60%">
    <div class="card-body">
    <form method="POST" action="<?php echo base_url('admin/potonganGaji/tambahDataAksi') ?>">
        <div class="form-group">
            <label >Jenis Potongan</label>
            <input type="text" name="potongan" class="form-control">
            <?php echo form_error('potongan')?>
        </div>
        <div class="form-group">
                <label >Jumlah Potongan</label>
                <input type="number" name="jml_potongan" class="form-control">
                <?php echo form_error('jml_potongan')?>
        </div>
            
            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
        </form>
    </div>
</div>