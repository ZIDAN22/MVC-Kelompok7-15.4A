<div class="main-content">
    <section class="section">
        <div class="selection-header">
            <h1>Transaksi Selesai</h1>
        </div>
    </section>

    <?php foreach ($transaksi as $tr) : ?>
    <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi')?>">
        <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
        <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali?>">

        <div class="form-group">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control"
             value="<?php echo $tr->tanggal_pengembalian?>">

        </div>  
        <div class="form-group">
            <label>Status Pengembalian</label>
            <select name="status_pengembalian" class="form-control">
                <option value="<?php echo $tr->status_rental?>"><?php echo $tr->status_pengembalian?></option>
                <option value="kembali">Kembali</option>
                <option value="belum kembali">Belum Kembali</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status Rental</label>
            <select name="status_rental" class="form-control">
                <option value="<?php echo $tr->status_rental?>"><?php echo $tr->status_rental?></option>
                <option value="selesai">Selesai</option>
                <option value="belum selesai">Belum Selesai</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-success">Simpan</button>

    </form>
    <?php endforeach; ?>
</div>