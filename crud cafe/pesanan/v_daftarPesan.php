<div class="container">
  <h2>Daftar pesan</h2>
  <a href="?halaman=tambahPesan" class="btn btn-success">Tambah pesan</a>
  <table class="table">
     <thead>
          <th>id</th>
          <th>menu</th>
          <th>jumlah</th>
          <th>harga</th>
          <th colspan="2">Aksi</th>
     </thead>
     <tbody>
          <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM pesanan");
          foreach($sql as $pesan){
          ?>
          <tr>
               <td><?= $pesan['id_pesanan']?></td>
               <td><?= $pesan['menu']?></td>
               <td><?= $pesan['jumlah']?></td>
               <td>Rp. <?= $pesan['harga']?></td>
               <td><a href="?halaman=ubahPesan&id=<?= $pesan['id_pesanan']?>"  class="badge text-bg-primary">ubah</a></td>
               <td><a href="?halaman=hapusPesan&id=<?= $pesan['id_pesanan']?>" onclick="return confirm('yakin hapus?')" class="badge text-bg-danger">hapus</a></td>
          </tr>
          <?php } ?>
     </tbody>
  </table>
</div>