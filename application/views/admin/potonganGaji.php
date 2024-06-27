 <!-- Page Heading -->
 <div class="main-content">
               <section class="section">
                      <div class="section-header">
                           <h1><?php echo $title ?></h1>
                       </div>
               </section>
               <?php echo $this->session->flashdata('pesan') ?>
        
        <a href="<?php echo base_url('admin/potonganGaji/tambahData') ?>" class="btn btn-success mb-2 mt-2">
        <i class="fas fa-plus"></i> Tambah Data</a>

        <table class="table table-hover table-striped table-bordered">
            <tr>
                <td class="Text-center">No</td>
                <td class="Text-center">Jenis potongan</td>
                <td class="Text-center">jumlah potongan</td>
                <td class="Text-center">Action</td>
            </tr>

            <?php  $no=1; foreach($pot_gaji as $p) : ?>
            <tr>
                <td>    <?php  echo $no++            ?></td> 
                <td>    <?php  echo $p->potongan     ?></td>
                <td>Rp. <?php  echo number_format($p->jml_potongan,0,',','.')  ?></td>
                <td>
                    <center>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/potonganGaji/hapusData/'.$p->id)?>" onclick="return confirm('Yakin Hapus?')">
                    <i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
            
            
            
            <?php endforeach;  ?>
        </table>
        </div>
                   
       