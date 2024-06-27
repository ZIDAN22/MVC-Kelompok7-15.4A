<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Tipe Mobil</h1>
            </div>
            <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_tipe/tambah_tipe')?>">
                <i class="fas fa-plus"></i> Tambah Tipe
            </a>
            <?php echo $this->session->flashdata('pesan')?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th width="20px" class="text-center">No</th>
                            <th class="text-center">Kode Tipe</th>
                            <th class="text-center">Nama Tipe</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($tipe as $tp):?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $tp->kode_tipe ?></td>
                            <td class="text-center"><?php echo $tp->nama_tipe ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_tipe/update_tipe/'.$tp->id_tipe)?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_tipe/delete_tipe/'.$tp->id_tipe)?>" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>