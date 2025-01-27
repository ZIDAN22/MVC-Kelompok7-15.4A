<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>: <?php echo $tr->merk ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>: <?php echo $tr->tanggal_rental ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal kembali</th>
                                <td>: <?php echo $tr->tanggal_kembali ?></td>
                            </tr>
                            <tr>
                                <th>Harga Sewa/Hari</th>
                                <td>: Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <?php
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlHari = abs($x - $y) / (60 * 60 * 24);
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td><?php echo $jmlHari ?> Hari</td>
                            </tr>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga * $jmlHari, 0, ',', '.') ?></button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 150px">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class="text-success">Silahkan Melakukan Pembayaran Melalui Nomor Rekening</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank BCA 23019481924</li>
                        <li class="list-group-item">Bank BRI 23491058123</li>
                        <li class="list-group-item">BANK BNI 23593495029</li>
                    </ul>
                    <?php
                    if (empty($tr->bukti_pembayaran)) { ?>
                        <button style="width: 100%" type="button" class="btn btn-sm btn-warning mt-3" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php } elseif ($tr->status_pembayaran == '0') { ?>
                        <button style="width: 100%"  class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
                    <?php } elseif ($tr->status_pembayaran == '1') { ?>
                        <button style="width: 100%"class="btn btn-sm btn-warning"><i class="fa fa-check"></i>Pembayaran Selesai</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">upload Bukti Pembayaran</h1>
            </div>
            <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi')?>" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="form-group">
                    <label> Upload Bukti Pembayaran</label>
                    <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental?>">
                    <input type="file" name="bukti_pembayaran" class="form-control">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" >Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>