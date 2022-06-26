<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK Wikrama Bogor</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" href="img/logo.png" type="img/x-icon" />
  </head>
  <body>
    <header>
      <a href="index.php?beranda.php" class="brand"><b>SMK Wikrama Bogor</b></a>
      <nav>
        <ul class="navbar">
          <li><a href="index.php?page=sejarah">Sejarah</a></li>
          <li><a href="index.php?page=kompetensi">Kompetensi</a></li>
          <li><a href="index.php?page=matrikulasi">Matrikulasi</a></li>
          <li><a href="index.php?page=kantin">Kantin</a></li>
        </ul>
      </nav>
    </header>
    <?php
    require 'function.php'
    ?>
    <footer>
    <div class="footer-bagian">

        <div class="foto-wikrama">
            <img src="img/logo.png" alt="">
        </div>

        <div class="list-halaman">
            <h2>Tentang Wikrama</h2>
            <ul>
              <li><a href="index.php?page=sejarah">Sejarah</a></li>
              <li><a href="index.php?page=kompetensi">Kompetensi</a></li>
              <li><a href="index.php?page=matrikulasi">Matrikulasi</a></li>
              <li><a href="index.php?page=kantin">Kantin</a></li>
            </ul>
        </div>

        <div class="kontak">
            <div class="alamat">
                <h2>Alamat Sekolah</h2>
                <h3>JL. RAYA WANGUN KEL. SINDANGSARI BOGOR, Kota Bogor, Jawa Barat</h3>
            </div>
            <div class="telepon">
                <h2>Kontak</h2>
                <h3>0251-8242411 <br>
                    082221718035 (Whatsapp)</h3>
            </div>
        </div>
        
    </div>
</footer>
  </body>
</html>
