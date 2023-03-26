<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Motor
    </button>
    <div class="d-flex flex-row mb-3">
      <?php if(!empty($data['penyewa'][0]['id_motor'])) : ?>
        <?php foreach($data['penyewa'] as $pnw) : ?>
            <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Profile Motor</h5>
                <p class="card-text">id : <?= $pnw['id_motor']; ?></p>
                <p class="card-text">Jenis Motor : <?= $pnw['jenis_motor']; ?></p>
                <p class="card-text">Nama Motor : <?= $pnw['nama_motor']; ?></p>
                <p class="card-text">Muatan : <?= $pnw['muatan']; ?></p>
                <p class="card-text">Harga/Hari : <?= $pnw['harga']; ?></p>
                <p class="card-text">Status Motor : <?= $pnw['status_motor']; ?></p>
                <a href="<?= BASEURL; ?>/motor/editmotor/<?= $pnw['nik']; ?>/<?= $pnw['id_motor']; ?>" class="card-link float-end">Detail Motor</a>
            </div>
            </div>
        <?php endforeach ?>
        <?php endif ?>
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
        <form action="<?= BASEURL; ?>/motor/tambah/<?= $data['penyewa'][0]['nik']; ?>" method="post">
        <input type="hidden" name="nik" value="<?= $data['penyewa'][0]['nik']; ?>">
          <div class="mb-3">
            <label for="id_motor" class="form-label">Id motor</label>
            <input type="text" class="form-control" id="id_motor" placeholder="id_motor misal Yamaha = YMH" name="id_motor">
          </div>
          <div class="mb-3">
            <label for="nama_motor" class="form-label">Nama motor</label>
            <input type="text" class="form-control" id="nama_motor" placeholder="nama motor" name="nama_motor">
          </div>
          <div class="mb-3">
            <label for="jenis_motor" class="form-label">Jenis motor</label>
            <input type="text" class="form-control" id="jenis_motor" placeholder="jenis motor" name="jenis_motor">
          </div>
          <div class="mb-3">
            <label for="muatan" class="form-label">Muatan motor</label>
            <input type="number" class="form-control" id="muatan" placeholder="Muatan motor" name="muatan">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Sewa motor</label>
            <input type="number" class="form-control" id="harga" placeholder="Harga Sewa" name="harga">
          </div>
          <label for="harga" class="form-label">Status Motor</label>
          <select class="form-select" aria-label="Default select example" name="status_motor">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
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