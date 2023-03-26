<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim'] ?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['prodi'] ?></h6>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link" data-bs-toggle="modal" data-bs-target="#formModal">Edit</a>
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
        <form action="<?= BASEURL; ?>/mahasiswa/ubah" method="post">
          <div class="mb-3">
            <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  value="<?= $data['mhs']['nama'] ?>">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control" id="nim" placeholder="Nim" name="nim" value="<?= $data['mhs']['nim'] ?>">
          </div>
          <select class="form-select" aria-label="Default select example" name="prodi">
            <option selected value="<?= $data['mhs']['prodi'] ?>"><?= $data['mhs']['prodi'] ?></option>
            <option value="Pendidikan Komputer">Pendidikan Komputer</option>
            <option value="Pendidikan Geografi">Pendidikan Geografi</option>
            <option value="Pendidikan Biologi">Pendidikan Biologi</option>
            <option value="Pendidikan Kimia">Pendidikan Kimia</option>

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