<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Cell Phone Cuan Cuan</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <!--PHP-->
  <?php
  require_once("sparqllib.php");
  $test = "";
  if (isset($_POST['search-handphone'])) {
    $test = $_POST['search-handphone'];
    $data = sparql_get(
      "http://localhost:3030/handphone",
      "
      PREFIX p: <http://cellphone.com>
      PREFIX d: <http://cellphone.com/ns/data#>

      SELECT ?Nama ?Merek ?RAM ?Memori ?Harga ?Kamera
        WHERE
        { 
            ?s  d:NamaHP ?Nama;
                d:MerekHP ?Merek;
                d:Ram ?RAM;
                d:Memori ?Memori;
                d:Harga ?Harga;
                d:Kamera ?Kamera; 
            FILTER (regex (?Nama,  '$test', 'i') || regex (?Merek,  '$test', 'i') || regex (?RAM,  '$test', 'i') || regex (?Memori,  '$test', 'i') || regex (?Harga,  '$test', 'i') || regex (?Kamera,  '$test', 'i'))
        }"
    );
  } else {
    $data = sparql_get(
      "http://localhost:3030/handphone",
      "
      PREFIX p: <http://cellphone.com>
      PREFIX d: <http://cellphone.com/ns/data#>
      SELECT ?Nama ?Merek ?RAM ?Memori ?Harga ?Kamera
        WHERE
        { 
            ?s  d:NamaHP ?Nama;
                d:MerekHP ?Merek;
                d:Ram ?RAM;
                d:Memori ?Memori;
                d:Harga ?Harga;
                d:Kamera ?Kamera;        
        }
            "
    );
  }

  if (!isset($data)) {
    print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
  }

  ?>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="Image/logo.jpg" alt="Bunga" width="450" />
      <form action="" method="post" id="nameform">
      <div class="search-box">
        <input type="text" name="search-handphone" placeholder="Search Handphone" />
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
      <i class="bi bi-search"></i>
      </form>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
      

        <div class="row tentang">
        <div class="col-lg-6">
          <img src="Image/logo.jpg" alt="tentang" class="img-fluid" />
        </div>
        <div class="col-lg">
          <h3>Apa itu <span>Cellphone Cuan Cuan ?</span></h3>
          <p>
          Cellphone Cuan Cuan adalah sebuah website pencarian merek dan spesifikasi handphone. Dengan Cellphone Cuan Cuan, anda bisa mengetahui
            segala spesifikasi tentang Handphone yang akan anda beli. Sehingga tidak khawatir lagi dengan spesifikasi yang tidak sempurna ataupun harga yang terlalu mahal
            dan tentunya tidak salah memilih merek handphone kesukaan anda.
          </p>
        </div>
      </div>


      <!-- Rekomendasi Minuman -->
        <div class="row rekom row text-center mb-3">
          <div class="col">
            <h2>Cari Handphone</h2>
            <br>
          </div>
        </div>
        <div class="row key">
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/1.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Xiaomi</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/2.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ZTE Phone</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/4.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Vivo</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/5.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Realme</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="row key">
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/6.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">POCO Phone</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/11.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Oppo</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/19.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Samsung</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="Image/41.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Iphone</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div>
      <!-- Hasil Pencarian -->

        <div class="row text-center mb-3 hasil">
          <div class="col">
            <h2>Hasil Pencarian</h2>
          </div>
        </div>
        <div class="row fs-5">
          <div class="col-md-5">
            <p>
              Menampilkan pencarian :
              <br />
            </p>
            <p>
              <span>
          <?php
          if ($test != NULL) {
            echo $test;
          } else {
            echo "Handphone yang dicari :";
          }
          ?></span>
            </p>
          </div>
        </div>
          
        <div class="row">

<?php $i = 0; ?>
<?php foreach ($data as $datas ): ?>
  <div class="col-md-4">
  <div class="box"> 
    <ul class="list-group list-group-flush">
          <div class="header-data"> <b>Nama Handphone :</b></div>
          <div class="item-data"><?= $datas['Nama']; ?></div>
  
          <div class="header-data"> <b>Merek Handphone :</b></div>
          <div class="item-data"><?= $datas['Merek']; ?></div>
        
          <div class="header-data"> <b>RAM :</b></div>
          <div class="item-data"><?= $datas['RAM']; ?></div>

          <div class="header-data"> <b>Memori :</b></div>
          <div class="item-data"><?= $datas['Memori']; ?></div>

          <div class="header-data"> <b>Harga :</b></div>
          <div class="item-data"><?= $datas['Harga']; ?></div>

          <div class="header-data"> <b>Kamera :</b></div>
          <div class="item-data"><?= $datas['Kamera']; ?></div>

      </ul>
    </div>
  </div>
 <?php endforeach; ?>
</div>



      </div>
    </section>
    <!-- Akhir About -->

    <!-- Footer -->
    <footer class="footer text-black text-center pb-3">
      <p>Created with love <i class="bi bi-suit-heart-fill text-primary"></i> Rellisa Puspa Kusuma 140810190029</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
