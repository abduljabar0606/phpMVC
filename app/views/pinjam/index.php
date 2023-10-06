<div class="container">

    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
    
    <nav class="navbar">
  <div class="container-fluid">
  <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary"> Tambah Peminjaman </a>
    <form class="d-flex" style="margin-left:555px;" action="<?= BASE_URL; ?>/pinjam/cari" method="post">
      <input class="form-control me-2" type="search" placeholder="Search" name="cari" autocomplete="off" required>
      <button class="btn btn-outline-success" type="submit" >Search</button>
    </form>
    <form action="<?= BASE_URL; ?>/pinjam/index" method="post">
        <button class="btn btn-outline-danger ms-2" type="submit" name="reset" >Reset</button>
    </form>
  </div>
</nav>
    
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Peminjaman</th>
                <th scope="col">Jenis Barang </th>
                <th scope="col">No Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; 
                date_default_timezone_set('Asia/Jakarta');
                $date = date('Y-m-d H:i:s');
            ?>
            <?php foreach ($data['pinjam'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?= $row['tgl_kembali']; ?></td>
                <td>
                    <?php if($row['tgl_pinjam'] == $row['tgl_kembali'] || $row['tgl_pinjam'] > $row['tgl_kembali'] || $date >= $row['tgl_kembali']  ):?>
                        <span class="badge text-bg-success">Sudah Kembali</span>  
                    <?php else:?>
                        <span class="badge text-bg-danger">Belum Kembali</span> 
                    <?php endif;?>
                </td>
                <td>
                    <?php if($row['tgl_pinjam'] == $row['tgl_kembali'] || $row['tgl_pinjam'] > $row['tgl_kembali'] || $date >= $row['tgl_kembali'] ):?>

                        <a href="<?= BASE_URL ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');" >Hapus</a>
                    <?php else:?>
                        <a href="<?= BASE_URL ?>/pinjam/edit/<?= $row['id'] ?>" class="btn btn-primary"> Edit </a>
                        <a href="<?= BASE_URL ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');" > Hapus </a>
                    
                    <?php endif;?>
                </td>

            </tr>

            <?php $no++; endforeach; ?>
        </tbody>


    </table>

</div>