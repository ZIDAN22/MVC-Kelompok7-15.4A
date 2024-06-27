 <!-- Page Heading -->
 <div class="main-content">
               <section class="section">
                      <div class="section-header">
                           <h1><?php echo $title ?></h1>
                       </div>
               </section>

               <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    Filter Data Absensi Pegawai
                </div>
                <div class="card-body">
                   <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="staticEmail2"> Bulan : </label>
                        <select name="bulan" class="form-control ml-3">
                            <option value="">--Pilih Bulan--</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="form-group mb-2 ml-5">
                        <label for="staticEmail2"> Tahun : </label>
                        <select name="tahun" class="form-control ml-3">
                            <option value="">--Pilih Tahun--</option>
                            <?php $tahun = date('Y');
                            for($i=2024;$i<$tahun+5;$i++) { ?>
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i>Tampilkan Data</button>
                    <a href="<?php echo base_url('admin/dataAbsensi/inputAbsensi')?>" class="btn btn-success mb-2 ml-2"><i class="fas fa-plus"></i>Input Kehadiran</a>
                </div>
            </form>
                </div>
                <?php 
                    if((isset($_GET['bulan'])&& $_GET['bulan']!='') && (isset($_GET['tahun']
                    )&& $_GET['tahun']!='' )){
                    $bulan = $_GET['bulan'];    
                    $tahun = $_GET['tahun']; 
                    $bulantahun = $bulan.$tahun;   
                }else{
                    $bulan = date('m');
                    $tahun = date ('Y');
                    $bulantahun = $bulan.$tahun;   
                    }
                ?>
                <div class="alert alert-info ">
                    Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> 
                    Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
                </div>

                <?php 
                    $jml_data = count ($absensi);
                    if($jml_data > 0) {?>

                <table class="table table-bordered table-striped">
                    <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">NIK</td>
                        <td class="text-center">Nama pegawai</td>
                        <td class="text-center">Jenis Kelamin</td>
                        <td class="text-center">Jabatan</td>
                        <td class="text-center">Hadir</td>
                        <td class="text-center">Sakit</td>
                        <td class="text-center">alpha</td>
                    </tr>
                    <?php $no=1; foreach($absensi as $a) : ?>
                        <Tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $a->nik ?></td>
                            <td><?php echo $a->nama_pegawai ?></td>
                            <td><?php echo $a->jenis_kelamin ?></td>
                            <td><?php echo $a->nama_jabatan ?></td>
                            <td><?php echo $a->hadir ?></td>
                            <td><?php echo $a->sakit ?></td>
                            <td><?php echo $a->alpha ?></td>
                        </Tr>
                    <?php endforeach; ?>
                </table>
                 <?php }else{ ?>
                        <span class="badge badge-danger"><i class="fas fa-info-circle">Data Absensi kosong, Silahkan input
                            data kehadiran bulan dan tahun yang dipilih! </i></span>
                    <?php } ?>
               </div>
                   
