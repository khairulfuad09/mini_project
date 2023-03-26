<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['title'] ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-primary">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home/index/<?= $data['nik']; ?>">My Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home/index/<?= $data['nik']; ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/profil/penyewa/<?= $data['nik']; ?>">Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/motor/penyewa/<?= $data['nik']; ?>">Motor</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                </li>
            </ul>
            </div>
        </div>
</nav>
