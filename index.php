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
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/search-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                USearch
            </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto"></ul>
        <a href="https://github.com/mr1dha/simple-search-engine" target="_blank"><img src="assets/img/github-icon.png" width="30" height="30" class="d-inline-block align-top">
        <span class="github-name">mr1dha</span></a>
    </div>
</div>
</nav>
<!-- End Navbar -->


<div class="container mt-5">
    <div class="row align-items-center" id="search-container">
        <div class="col text-center">
             <img src="assets/img/search-icon.png" width="95" height="95" class="d-inline-block align-top">
             <span class="title">USearch</span>
             <form action="search.php" method="GET">
             <div class="input-group my-3 w-50 mx-auto">
              <input type="search" name="q" class="form-control" placeholder="Enter keyword" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary bg-blue" type="submit">Search</button>
                </div>
            </div>
            <span>Tampilkan sebanyak </span>
            <input type="text" value="10" style="width: 3rem;" name="n" required>
            <span>hasil</span>
            </form>
        </div>
    </div>
</div> 

<footer class="fixed-bottom text-center py-3 text-muted">
    <span>Copyright &copy; 2021 | Muhammad Ridha</span>    
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>