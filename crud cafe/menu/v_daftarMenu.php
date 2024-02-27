<div class="container">
  <h2>Daftar Menu</h2>
  <a href="?halaman=tambahMenu" class="btn btn-success">Tambah Menu</a>
  <table class="table">
     <thead>
          <th>id</th>
          <th>jenis</th>
          <th>nama</th>
          <th>harga</th>
          <th colspan="2">Aksi</th>
     </thead>
     <tbody>
          <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM menu");
          foreach($sql as $data){
          ?>
          <tr>
               <td><?= $data['id']?></td>
               <td><?= $data['jenis']?></td>
               <td><?= $data['nama']?></td>
               <td>Rp. <?= $data['harga']?></td>
               <td><a href="?halaman=ubahMenu&id=<?= $data['id']?>" class="badge text-bg-primary">ubah</a></td>
               <td><a href="?halaman=hapusMenu&id=<?= $data['id']?>" onclick="return confirm('yakin hapus?')" class="badge text-bg-danger">hapus</a></td>
          </tr>
          <?php } ?>
     </tbody>
  </table>
</div>