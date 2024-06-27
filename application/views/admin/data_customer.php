<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Customer</h1>
            </div>

            <a href="<?php echo base_url('admin/data_customer/tambah_customer')?>" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Customer
            </a>
            <?php echo $this->session->flashdata('pesan') ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">No. Telepon</th>
                            <th class="text-center">No. KTP</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($customer as $cs) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td><?php echo $cs->nama ?></td>
                                <td><?php echo $cs->username ?></td>
                                <td><?php echo $cs->alamat ?></td>
                                <td><?php echo $cs->gender ?></td>
                                <td><?php echo $cs->no_telepon ?></td>
                                <td><?php echo $cs->no_ktp ?></td>
                                <td><?php echo $cs->password ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/data_customer/delete_customer/'.$cs->id_customer) ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Yakin Hapus?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url('admin/data_customer/update_customer/'.$cs->id_customer) ?>" class="btn btn-sm btn-primary">
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
