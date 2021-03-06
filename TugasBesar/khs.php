<!DOCTYPE html>
<html>
<head>
  <title>Computer Based Information System</title>
  <link href="image/logoupn.png" rel="icon" type="image/png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>         
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-2 bggreen">
          <p class="text-center colorwhite fontfamily psize">UNIVERSITAS PEMBANGUNAN NASIONAL "VETERAN" YOGYAKARTA</p>
          <center>
          <img src="image/logoupn.png" width="80" height="80" border="0" alt="Logo UPNVY">
          </center>
          <br>
          <p class="text-center colorwhite fontfamilyfakultas">FAKULTAS EKONOMI DAN BISNIS</p>
          <div>
            <table class="table-mahasiswa ">
              <tr>
                <td align="center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25"s>
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                  </svg></td>
                  <td align="all-text"> Eilen Floretta Ginting</td>
              </tr>
              <tr>
                <td align="center" colspan="2">142180137</td>
              </tr>
          </table>
          </div>

        <div class="all-text all-color-text" style="font-weight: bold; margin-left: 20px;">
          AKUNTANSI
        </div>
        <div>
          <ul type="square">
            <a href="mahasiswa.php" class="menu"><li>Selamat Datang</li></a>
            <a href="mahasiswa.php" class="menu"><li>Selamat Datang</li></a>
            <a href="infokurikulum.php" class="menu"><li>Info Kurikulum</li></a>
            <a href="katalogbuku.php" class="menu"><li>Katalog Buku</li></a>
            <a href="kalenderakademikmhs.php" class="menu"><li>Kalender Akademik</li></a>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="menu"><li>Akademik</li></a>
                  </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class ="panel-body" style="margin-left: 15px;">
                        <a href="khs.php" class="menu"><li>KHS</li></a>
                        <a href="daftarnilai.php" class="menu"><li>Daftar Nilai</li></a>
                        <a href="jadwalkuliah.php" class="menu"><li>Jadwal Kuliah+Presensi</li></a>
                        <a href="pengajuankrs.php" class="menu"><li>Pengajuan KRS</li></a>
                        <a href="sejarahpembayaran.php" class="menu"><li>Sejarah Pembayaran</li></a>
                        <a href="cetakkrs.php" class="menu"><li>Cetak KRS</li></a> <br>
                </div>
                  </div>
              </div>
           </div>
            <a href="statusanda.php" class="menu"><li>Status Pinjam Buku</li></a>
            <a href="editbiodata.php" class="menu"><li>Edit Biodata</li></a>
            <a href="pesanmhs.php" class="menu"><li>Pesan MHS</li></a>
            <a href="ubahpassword.php" class="menu"><li>Ubah Password</li></a>
          </ul>
          <hr>
          <br>
        </div>
          <button type="submit" class="btn btn-logout">Logout</button>
          <br><br><br><br><br><br><br>
          
          </div>

          <div class="col-sm-10 col-md-10">
            <div class="table-responsive">
              <table class="table text-dsn" id="t01">
                <p><center>KRS/KHS SEMESTER GANJIL 2019/2020</center></p>
                <tr>
                  <th>THN KUR</th>
                  <th>KODE MK</th> 
                  <th>NAMA MK</th>
                  <th>SKS</th>
                  <th>KELAS</th>
                  <th>KELP</th>
                  <th>NILAI</th>
                </tr>
                <tr>
                  <td>2016</td>
                  <td>1420013</td>
                  <td>ANKUNTANSI BIAYA</td>
                  <td>3</td>
                  <td>EA-A</td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
          </div>
        <br>
        <hr>
          <div style="margin-left: 45%;">
            <p class="all-text">Total SKS: </p>
            <p class="all-text">IP Semester: </p>            
          </div>
        
      </div>
    </div>
  </div>
</body>
</html>