<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>

<body>
    <!-- <h1>Selamat Datang!</h1> -->
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Selamat Datang</h1>
            <p class="lead">SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek.</p>
            <!-- <img src="img/ryuzaki.jpg"> -->
            <hr class="my-4">
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <a class="btn btn-primary btn-sm" href="<?= BASE_URL; ?>/home/detail" role="button">Lihat Selengkapnya</a>
    </div>
    </div>
</body>

</html>
