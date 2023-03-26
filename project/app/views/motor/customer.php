<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

    <div class="d-flex flex-row mb-3">
      <?php if(!empty($data['penyewa'][0]['nama_pemilik'])) : ?>
        <?php foreach($data['penyewa'] as $pnw) : ?>
            <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Profile Motor</h5>
                <p class="card-text">Pemilik : <?= $pnw['nama_pemilik']; ?></p>
                <p class="card-text">Jenis Motor : <?= $pnw['jenis_motor']; ?></p>
                <p class="card-text">Nama Motor : <?= $pnw['nama_motor']; ?></p>
                <p class="card-text">Muatan : <?= $pnw['muatan']; ?></p>
                <p class="card-text">Harga/Hari : <?= $pnw['harga']; ?></p>
                <p class="card-text">Status Motor : <?= $pnw['status_motor']; ?></p>
                <p class="card-text">Alamat : <?= $pnw['Alamat']; ?></p>
                <a href="<?= BASEURL; ?>/motor/pesanmotor/<?= $data['nik']; ?>/<?= $pnw['id_motor']; ?>" class="card-link float-end">Pesan</a>
            </div>
            </div>
        <?php endforeach ?>
        <?php endif ?>
    </div>
</div>