<?php
//  var_dump($data);
?>
<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">My Profile</h5>
        <p class="card-text">Nama : <?= $data['penyewa']['nama_pemilik']; ?></p>
        <p class="card-text">NIK : <?= $data['penyewa']['nik']; ?></p>
        <p class="card-text">Alamat : <?= $data['penyewa']['Alamat']; ?></p>
        <p class="card-text">Jenis Kelamin : <?= $data['penyewa']['jeniskelamin']; ?></p>
        <a href="#" class="card-link float-end" data-bs-toggle="modal" data-bs-target="#formModal">Ubah Data</a>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/homecustomer/ubah/<?= $data['penyewa']['nik']; ?>" method="post">
          <div class="mb-3">
            <input type="hidden" name="password" value="<?= $data['penyewa']['password']; ?>">
            <input type="hidden" class="form-control" id="nik"  name="nik" value="<?= $data['penyewa']['nik']; ?>">
            <label for="nama_pemilik" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_pemilik" placeholder="Nama" name="nama_pemilik"  value="<?= $data['penyewa']['nama_pemilik']; ?>">
          </div>
          <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Alamat" placeholder="Nim" name="Alamat" value="<?= $data['penyewa']['Alamat']; ?>">
          </div>
          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select" aria-label="Default select example" name="jeniskelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit data</button>
          </div>
      </form>
    </div>
  </div>
</div>