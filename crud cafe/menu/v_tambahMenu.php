<div class="container">
     <h2>Tambah Menu</h2>
     <form action="?halaman=simpanMenu" method="post">
          <div class="row">
               <div class="col-3">
                    jenis:
                    <select name="jenis" id="" class="form-select">
                         <option value="makanan">makanan</option>
                         <option value="minuman">minuman</option>
                    </select>
               </div>
               <div class="row">
                    <div class="col-3">
                         Nama:
                         <input type="text" name="nama" id="" class="form-control">
                    </div>
               </div>
               <div class="row">
                    <div class="col-3">
                         Harga:
                         <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga">
                         </div>
                    </div>
               </div>
               <div class="row">
                <div class="col-3">
                  <input type="submit" value="simpan" class="btn btn-primary" >
                </div>
               </div>
          </div>
     </form>
</div>