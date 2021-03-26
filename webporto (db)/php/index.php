<?php include "koneksi.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bree+Serif&family=Concert+One&family=Kaushan+Script&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Hello, world!</title>
  </head>
  <body>

      <section id="navbar">
          <div class="container-fluid">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about" tabindex="-1" aria-disabled="true">About</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#service" tabindex="-1" aria-disabled="true">Service</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#contactme" tabindex="-1" aria-disabled="true">Contact Me</a>
                  </li>
                </ul>
                <a class="navbar-brand disabled text-center">Angkasa <br/> Raya</a>
                <button type="button" class="btn btn-primary btn-sm ms-auto">My Portofolio</button>
              </div>
            </div>
            </div>
          </nav>
              <div class="text-container text-light">
              <p>About Me</p>
              <p>Halo, Perkenalkan nama saya Angkasa Raya. Saya merupakan seorang siswa <br> sekolah menengah kejuruan (SMK), Yang merupakan siswa dari sekolah <br> SMK Taruna Bhakti Depok. Saya berumur 17 tahun ini, <br> dan saya masuk jurusan Rekayasa Perangkat Lunak (RPL).</p>
              <button type="button" class="btn btn-warning btn-lg mt-2">Get Started</button>
              </div>
          </div>
      </section>

      <section id="service">
        <div class="container">
          <div class="row">
          <?php
                    $sql = "SELECT * FROM `biodata`";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
          <div class="card" style="width: 18rem; height: 500px">
            <div class="card-body">
              <h5 class="card-title text-center">Biodata</h5>
              <img src="<?php echo $row["gambar"];?>" style="margin-left: 80px;" />
                <ul class="card-text">
                  <li><p>Nama Lengkap: <?php echo $row["nmalngkp"];?></p></li>
                  <li><p>Jenis Kelamin: <?php echo $row["jenisklmn"];?></p></li>
                  <li><p>TTL: <?php echo $row["kota"], ', ', $row["tempatlhr"];?></p></li>
                  <li><p>Agama: <?php echo $row["agama"];?></p></li>
                  <li><p>Alamat: <?php echo $row["alamat"];?></p></li>
                  <li><p>Telepon: <?php echo $row["tlpn"];?></p></li>
                  <li><p>Pekerjaan Ibu: <?php echo $row["pkrjaanibu"];?></p></li>
                  <li><p>Pekerjaan Ayah: <?php echo $row["pkrjaanbapa"];?></p></li>
                </ul>
            </div>
          </div>
          <?php
          }
          ?>
          
          <div class="col-4">
          <?php
                    $sql = "SELECT * FROM `tujuanpro`";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
          <div class="card mb-3" style="width: 540px; height: 241px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo $row["gambar"];?>" alt="profilepict" style="width: 180px; height: 225px; border-radius: 10px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-center">Tujuan Profesional</h5>
                  <p class="card-text text-center"><?php echo $row["deskripsi"];?></p>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        
          <?php
                    $sql = "SELECT * FROM `skills`";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
          <div class="card mb-3" style="width: 540px; height: 241px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo $row["gambar"];?>" alt="..." style="width: 180px; height: 225px; border-radius: 10px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-center">Keterampilan</h5>
                  <p class="card-text text-center"><?php echo $row["deskripsi"];?></p>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          </div>
          </div>
        </div>
      </section>

      <section id="contactme">
        <div class="container">
        <div class="card">
          <div class="row g-0">
            
            <div class="col-sm-2">
              <img src="./img/wp4088343-shigeo-kageyama-wallpaperscopy.jpg" alt="Contact Img">
            </div>

            <div class="col-md-8">
              <form action="simpan.php" method="POST">
              <div class="card-body">
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Email" name="emailadd">
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komen" placeholder="Masukan Komentar"></textarea>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-success" name="simpan" value="Kirim">
              </div>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    <section id="socials">
      <div class="container">
      <div class="card">
        <div class="card-body">
        <span style="font-size: 40px; color: blue; margin-left: 10px;">
                <i class="fab fa-facebook-square"></i>
            </span>
            <a href="https://facebook.com">Facebook.com</a>

            <span style="font-size: 40px; color: red;">
                <i class="fab fa-youtube-square"></i>
            </span>
            <a href="https://youtube.com">Youtube.com</a>

            <span style="font-size: 40px;">
                <span style="color: black;">
                    <i class="fab fa-github-square"></i>
                </span>
            </span>
            <a href="https://github.com">Github.com</a>
        </div>
      </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>