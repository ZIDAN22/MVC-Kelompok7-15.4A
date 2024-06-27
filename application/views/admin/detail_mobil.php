<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>
    </section>

    <?php foreach($detail as $dt) :?>
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>" class="img-fluid rounded">
                    </div>
                    <div class="col-md-7">
                        <table class="table table-striped">
                            <tr>
                                <td class="font-weight-bold">Tipe Mobil</td>
                                <td>
                                    <?php 
                                        if ($dt->kode_tipe == "SDN"){
                                            echo "Sedan";
                                        } elseif($dt->kode_tipe == "HTB"){
                                            echo "Hatchback";
                                        } elseif($dt->kode_tipe == "MPV"){
                                            echo "Multi Purpose Vehicle";
                                        } else {
                                            echo "<span class='text-danger'>Tipe Mobil belum terdaftar</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. Plat</td>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Tahun</td>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Harga Sewa/Hari</td>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.')  ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda,0,',','.')  ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Status</td>
                                <td>
                                    <?php 
                                        if($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        } else {
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-outline-danger mr-2" href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>
                        <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?> 
</div>