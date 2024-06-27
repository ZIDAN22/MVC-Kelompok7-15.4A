<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo $title ?></h1>
            </div>
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataJabatan/tambahData') ?>">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
            <?php echo $this->session->flashdata('pesan') ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Jabatan</th>
                            <th class="text-center">Gaji Pokok</th>
                            <th class="text-center">Tj. Transport</th>
                            <th class="text-center">Uang Makan</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($jabatan as $j) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?> </td>
                            <td><?php echo $j->nama_jabatan ?> </td>
                            <td class="text-center">Rp. <?php echo number_format($j->gaji_pokok,0,',','.') ?> </td>
                            <td class="text-center">Rp. <?php echo number_format($j->tj_transport,0,',','.') ?> </td>
                            <td class="text-center">Rp. <?php echo number_format($j->uang_makan,0,',','.') ?> </td>
                            <td class="text-center">Rp. <?php echo number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan,0,',','.') ?> </td>
                            <td class="text-center">
                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/deleteData/'.$j->id_jabatan) ?>">
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
