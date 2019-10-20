<?php 
require 'functions.php';

$lebah = query("SELECT * FROM data_inout ORDER BY id DESC LIMIT 20");

$lebahMasukEntrance1 = query("SELECT * FROM data_inout WHERE entrance = 'satu' AND status = 'masuk'");
$lebahKeluarEntrance1 = query("SELECT * FROM data_inout WHERE entrance = 'satu' AND status = 'keluar'");

$lebahMasukEntrance2 = query("SELECT * FROM data_inout WHERE entrance = 'dua' AND status = 'masuk'");
$lebahKeluarEntrance2 = query("SELECT * FROM data_inout WHERE entrance = 'dua' AND status = 'keluar'");

$lebahMasukEntrance3 = query("SELECT * FROM data_inout WHERE entrance = 'tiga' AND status = 'masuk'");
$lebahKeluarEntrance3 = query("SELECT * FROM data_inout WHERE entrance = 'tiga' AND status = 'keluar'");

$lebahMasukEntrance4 = query("SELECT * FROM data_inout WHERE entrance = 'empat' AND status = 'masuk'");
$lebahKeluarEntrance4 = query("SELECT * FROM data_inout WHERE entrance = 'empat' AND status = 'keluar'");

$lebahMasukEntrance5 = query("SELECT * FROM data_inout WHERE entrance = 'lima' AND status = 'masuk'");
$lebahKeluarEntrance5 = query("SELECT * FROM data_inout WHERE entrance = 'lima' AND status = 'keluar'");

$lebahMasukEntrance6 = query("SELECT * FROM data_inout WHERE entrance = 'enam' AND status = 'masuk'");
$lebahKeluarEntrance6 = query("SELECT * FROM data_inout WHERE entrance = 'enam' AND status = 'keluar'");

$totalMasuk = count($lebahMasukEntrance1) + count($lebahMasukEntrance2) + count($lebahMasukEntrance3) + count($lebahMasukEntrance4) + count($lebahMasukEntrance5) + count($lebahMasukEntrance6);
$totalKeluar = count($lebahKeluarEntrance1) + count($lebahKeluarEntrance2) + count($lebahKeluarEntrance3) + count($lebahKeluarEntrance4) + count($lebahKeluarEntrance5) + count($lebahKeluarEntrance6);

// var_dump($sensor);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6f14ca3fd1.js"></script>
    
    <title>Dashboard - Bee Counter</title>
  </head>
  <body>
        <nav class="navbar navbar-custom fixed-top flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Bee Counter</a>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="#">Alifa Almira</a>
            </li>
          </ul>
        </nav>
        
        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <span data-feather="home"></span><i class="fas fa-home fa-lg"></i>Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file"></span><i class="fas fa-table fa-lg"></i>
                      Table
                    </a>
                  </li>                   -->
                </ul>               
              </div>
            </nav>
        
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
              </div>
        
              <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
              <div class="container">
                <div class="row">

                  <!-- entrance 1 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 1</h6>
                          <p>In : <?= count($lebahMasukEntrance1)?> <br> Out : <?= count($lebahKeluarEntrance1)?></p>
                      </div>
                    </div>                
                  </div>
                  
                  <!-- entrance 2 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 2</h6>
                          <p>In : <?= count($lebahMasukEntrance2)?> <br> Out : <?= count($lebahKeluarEntrance2)?></p>
                      </div>
                    </div>                
                  </div>

                  <!-- entrance 3 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 3</h6>
                          <p>In : <?= count($lebahMasukEntrance3)?> <br> Out : <?= count($lebahKeluarEntrance3)?></p>
                      </div>
                    </div>                
                  </div>

                  <!-- entrance 4 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 4</h6>
                          <p>In : <?= count($lebahMasukEntrance4)?> <br> Out : <?= count($lebahKeluarEntrance4)?></p>
                      </div>
                    </div>                
                  </div>

                  <!-- entrance 5 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 5</h6>
                          <p>In : <?= count($lebahMasukEntrance5)?> <br> Out : <?= count($lebahKeluarEntrance5)?></p>
                      </div>
                    </div>                
                  </div>

                  <!-- entrance 6 -->
                  <div class="col-md-2 card">
                    <div class="row">
                      <div>
                          <h6>Entrance 6</h6>
                          <p>In : <?= count($lebahMasukEntrance6)?> <br> Out : <?= count($lebahKeluarEntrance6)?></p>
                      </div>
                    </div>                
                  </div>

                  <!-- total -->
                  <div class="col-md-5 card">
                    <div class="row">
                      <div class="col-md-4 total">
                          <h4><b>TOTAL</b></h4>
                      </div>
                      <div class="col-md-8 total">
                          <p>In : <?= $totalMasuk?> <br> Out : <?= $totalKeluar?></p>
                      </div>
                    </div>                
                  </div>
                </div>
              </div>
              
              <div class="container tabel">
                <h5>Data Lebah Keluar/Masuk</h5>
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Entrance</th>
                        <th>Status</th>
                        <th>Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lebah as $row) :?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["entrance"]; ?></td>
                        <td><?= $row["status"]; ?></td>
                        <td><?= $row["waktu"]; ?></td>
                      </tr>
                      <?php endforeach; ?>                
                    </tbody>
                  </table>
                </div>
              </div>
            </main>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>