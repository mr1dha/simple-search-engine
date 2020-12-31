<?php 
    require 'core/engine.php';

 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Simple Search Engine Demo</title>
</head>
<body>

    <!-- Begin Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-2 py-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/search-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                USearch
            </a>
            <form action="" method="GET" class="form-inline my-2 my-lg-0" id="form-seacrh-nav">
                <input name="q" class="form-control mr-sm-2" id="search-top" type="search" placeholder="Enter keyword" aria-label="Search" value="<?= $q; ?>">
              <button class="btn bg-blue my-2 my-sm-0" type="submit">Search</button>
          </form>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <a href="https://github.com/mr1dha/simple-search-engine" target="_blank"><img src="assets/img/github-icon.png" width="30" height="30" class="d-inline-block align-top">
        <span class="github-name">mr1dha</span></a>
    </div>
</div>
</nav>
<!-- End Navbar -->


<div class="container mt-5 pb-5">
    <div class="row align-items-bottom">
        <div class="col-md-8">
            <h5>Hasil pencarian untuk : <b><?= $q; ?></b></h5>
            <hr class="mb-0">
            <small class="text-muted float-left">Menampilan <?= count($articles); ?> hasil pencarian</small>
            <small class="text-muted float-right"><?= $time->waktu ? $time->waktu : "0.00" ?>  detik</small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" id="search-result-container">

           <?php if( count($articles) > 1): ?>
                <?php foreach($articles as $article): ?>
                    <div class="search-result-item">
                        <a href="<?=  $article->url ?>"><?=  $article->judul ?></a>
                        <p class="search-result-isi small"><?=  $article->isi ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>

            <?php endif; ?>
        </div>
    </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>