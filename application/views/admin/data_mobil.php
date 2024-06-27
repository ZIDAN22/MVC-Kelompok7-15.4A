<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Mobil</h1>
            </div>

            <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-2">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
            <?php echo $this->session->flashdata('pesan') ?>

            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Tipe</th>
                            <th class="text-center">Merk</th>
                            <th class="text-center">No. Plat</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mobil as $mb) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center">
                                    <img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>" class="img-thumbnail">
                                </td>
                                <td class="text-center"><?php echo $mb->kode_tipe ?></td>
                                <td class="text-center"><?php echo $mb->merk ?></td>
                                <td class="text-center"><?php echo $mb->no_plat ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($mb->status == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/data_mobil/detail_mobil/'.$mb->id_mobil) ?>" class="btn btn-sm btn-success">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?php echo base_url('admin/data_mobil/delete_mobil/'.$mb->id_mobil) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url('admin/data_mobil/update_mobil/'.$mb->id_mobil) ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
