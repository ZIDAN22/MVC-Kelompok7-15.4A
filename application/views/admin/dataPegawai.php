<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo $title ?></h1>
            </div>

            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
            <?php echo $this->session->flashdata('pesan') ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Karyawan</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($pegawai as $p) : ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?> </td>
                            <td class="text-center"><?php echo $p->nik ?> </td>
                            <td><?php echo $p->nama_pegawai ?> </td>
                            <td class="text-center"><?php echo $p->jenis_kelamin ?> </td>
                            <td class="text-center"><?php echo $p->jabatan ?> </td>
                            <td class="text-center"><?php echo $p->tanggal_masuk ?> </td>
                            <td class="text-center"><?php echo $p->status ?> </td>
                            <td class="text-center"><img src="<?php echo base_url().'assets/upload/'.$p->photo ?>" width="100px" class="img-thumbnail"></td>
                            <td class="text-center">
                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/'.$p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
