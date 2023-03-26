<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class="row mt-3">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
            <h3 class="mt-5">Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data Ini???');">Hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end">Detail</a>
                        </li>
                    <?php endforeach ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control" id="nim" placeholder="Nim" name="nim">
          </div>
          <select class="form-select" aria-label="Default select example" name="prodi">
            <option selected>Program Studi</option>
            <option value="Pendidikan Komputer">Pendidikan Komputer</option>
            <option value="Pendidikan Geografi">Pendidikan Geografi</option>
            <option value="Pendidikan Biologi">Pendidikan Biologi</option>
            <option value="Pendidikan Kimia">Pendidikan Kimia</option>

          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah data</button>
          </div>
      </form>
    </div>
  </div>
</div>