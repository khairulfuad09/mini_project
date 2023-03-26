<div class="container">
    <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Profile Motor</h5>
                <p class="card-text">id : <?= $data['penyewa'][0]['id_motor']; ?></p>
                <p class="card-text">Jenis Motor : <?= $data['penyewa'][0]['jenis_motor']; ?></p>
                <p class="card-text">Nama Motor : <?= $data['penyewa'][0]['nama_motor']; ?></p>
                <p class="card-text">Muatan : <?= $data['penyewa'][0]['muatan']; ?></p>
                <p class="card-text">Harga/Hari : <?= $data['penyewa'][0]['harga']; ?></p>
                <p class="card-text">Status Motor : <?= $data['penyewa'][0]['status_motor']; ?></p>
                <a href="#" class="card-link float-end" data-bs-toggle="modal" data-bs-target="#formModal">Buat Pesanan</a>
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
        <form action="<?= BASEURL; ?>/motor/pesan/<?= $data['nik']; ?>" method="post">
        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Id Pemilik</label>
            <input type="text" class="form-control" id="nik"  name="nik" value="<?= $data['penyewa'][0]['nik']; ?>" aria-label="Disabled input example" disabled>
            <input type="hidden" class="form-control" id="nik"  name="nik" value="<?= $data['penyewa'][0]['nik']; ?>">
          </div>
          <div class="mb-3">
            <label for="id_motor" class="form-label">id motor</label>
            <input type="text" class="form-control" id="id_motor" placeholder="" name="id_motor"  value="<?= $data['penyewa'][0]['id_motor']; ?>" aria-label="Disabled input example" disabled>
            <input type="hidden" class="form-control" id="id_motor" placeholder="" name="id_motor"  value="<?= $data['penyewa'][0]['id_motor']; ?>">
          </div>
          <div class="mb-3">
            <label for="jenis_motor" class="form-label">Jenis motor</label>
            <input type="text" class="form-control" id="jenis_motor" placeholder="" name="jenis_motor" value="<?= $data['penyewa'][0]['jenis_motor']; ?>" aria-label="Disabled input example" disabled>
          </div>
          <div class="mb-3">
            <label for="nama_motor" class="form-label">Nama motor</label>
            <input type="text" class="form-control" id="nama_motor" placeholder="" name="nama_motor" value="<?= $data['penyewa'][0]['nama_motor']; ?>" aria-label="Disabled input example" disabled>
          </div>
          <div class="mb-3">
            <label for="muatan" class="form-label">Muatan</label>
            <input type="text" class="form-control" id="muatan" placeholder="" name="muatan" value="<?= $data['penyewa'][0]['muatan']; ?>" aria-label="Disabled input example" disabled>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga motor/hari</label>
            <input type="text" class="form-control" id="harga" placeholder="" name="harga" value="<?= $data['penyewa'][0]['harga']; ?>" aria-label="Disabled input example" disabled>
          </div>
          <div class="mb-3">
            <label for="estimasi" class="form-label">Estimasi</label>
            <input type="text" class="form-control" id="estimasi" placeholder="Estimasi" name="estimasi">
          </div>
          <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Username</label>
            <input type="text" class="form-control" id="nama_pemilik" placeholder="Username" name="nama_pemilik">
          </div>
          <label for="id" class="form-label">Jenis Pemabayaran</label>
          <select class="form-select" aria-label="Default select example" name="id">
            <option value="csh">CASH</option>
            <option value="dbt">Debit</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Buat Pesanan</button>
          </div>
      </form>
    </div>
  </div>
</div>