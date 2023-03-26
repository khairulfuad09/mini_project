<div class="container">
    <form action="<?= BASEURL; ?>/login/tambahData" method="post">
        <legend>Daftar</legend>
        <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" id="nik" class="form-control" placeholder="NIK"  name="nik">
        </div>
        <div class="mb-3">
        <label for="nama_pemilik" class="form-label">Nama</label>
        <input type="text" id="nama_pemilik" class="form-control" placeholder="Nama"  name="nama_pemilik">
        </div>
        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" id="alamat" class="form-control" placeholder="Alamat"  name="alamat">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password"  name="password">
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jeniskelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label">Sebagai</label>
        <select class="form-select" aria-label="Default select example" name="status">
            <option value="Customer">Customer</option>
            <option value="rental provider">rental provider</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>