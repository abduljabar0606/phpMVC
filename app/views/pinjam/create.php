<div class="container">
    <h3 class="mb-3">Tambah Peminjaman </h3>
    <form action="<?= BASE_URL; ?>/pinjam/simpanPeminjaman" method="post">
    <div class="class-body">
        <div>
        <label for="nama_peminjaman"> Nama </label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjam" autocomplete="off" required>
        </div>
        <div class="form-group mb-3">
                <label for="jenis">jenis Barang</label>
                <select class="form-select" aria-label="Default select example" name="jenis_barang">
                <option value="pilih">Pilih</option>
                <option value="1">HP</option>
                <option value="2">LAPTOP</option>
                <option value="3">ADAPTOR LAN</option>
                </select>
            </div>

            
            <div class="form-group mb-3">
                <label for="no_barang">No Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" required>
            </div>

            
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" >
            </div>

           
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


</form>
</div> 