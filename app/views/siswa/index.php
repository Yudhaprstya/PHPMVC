<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>

<body> -->
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Siswa
            </button>

            <h3 class="mt-4">DATA SISWA</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $siswa['nama']; ?>
                        <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-sm btn-primary">Detail</a>
                        <!-- <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="btn
                        btn-sm btn-success float-right tampilModalUbah" data-toggle="modal" data-
                        target="#formModal" data-id="<?= $siswa['id']; ?>">ubah</a> -->
                        <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-sm btn-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
 
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>

</div>

<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>DATA SISWA</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $siswa['nama']; ?>
                        <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary">Detail</a>
                    </li>
                <?php endforeach; ?>

                
                
            </ul>
        </div>
    </div> -->
<!-- </div> -->

<!-- </body>

</html> -->