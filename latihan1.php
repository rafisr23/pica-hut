<?php 
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pica Hut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">All Menu</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row mt-3">
        <div class="col">
          <h1>All Menu</h1>
        </div>
      </div>
      <div class="row mt-3">
        <?php foreach ($menu as $row) : ?>
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?= $row["nama"]; ?></h5>
                <p class="card-text"><?= $row["deskripsi"]; ?></p>
                <h5 class="card-title"><b>Rp<?= number_format($row["harga"], 0, ".", "."); ?></b></h5>
                <a href="#" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>