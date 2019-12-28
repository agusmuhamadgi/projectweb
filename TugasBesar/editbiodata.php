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
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"s>
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                  </svg></td>
                  <td align="all-text">Eilen Floretta Ginting</td>
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
          <button type="submit" class="btn btn-cari" style="margin-left: 70px;">Logout</button>
          </div>

      <div class="col-sm-10 col-md-10" bgcolor-tengah>
        <div class="col-sm-10 col-md-10" style="margin-left: 10px; margin-top: 10px;">
          <form class="all-text">
            <h5 style="padding-top: 2px; margin-left: 2px;" >
              <center>KEBENERAN ISI BIODATA INI TANGGUNG JAWAB ANDA, SILAHKAN UNTUK MELENGKAPI SENDIRI DENGAN DATA YANG BENAR.</h5>
              </center>
                  <center><h5>EFEK KESALAHAN PENGISIAN BIODATA PADA TRANSKRIP, IJAZAH, PENGAMBILAN </h5></center>
                  <center><h5>KEPUTUSAN MANAJEMEN FAKULTAS</h5></center>
                  <center><h5>TERIMA KASIH.</P></center></h5></center>           
          </form> 
        </div>

        <div class="table-responsive">
          <table class="table text-dsn">
                              <tr>
                                <th>ANGKATAN :</th>
                                <td>2017</td>
                              </tr>

                              <tr>
                                <th>NO. MHS :</th>
                                <td>517 0411 369</td>
                              </tr>

                              <tr>
                                <th>NAMA :</th>
                                <td>ANNISA RAHMAWATI</td>
                              </tr>

                                <tr>
                                <th>AGAMA</th>
                                <td><select><option>ISLAM</option>
                                      <option>KRISTEN</option>
                                      <option>BUDHA</option>
                                      <option>HINDU</option>
                                      <option>PROTESTAN</option></select>
                                </td>
                              </tr>

                              <tr>
                                <th>JENIS KELAMIN</th>
                                <td><input type="radio" name="jeniskelamin">Laki-Laki
                                  <input type="radio" name="jeniskelamin">Perempuan</ins></td>
                              </tr>
                              <tr>
                                <td colspan="2" style="text-align: center;">Alamat Di Yogyakarta</td>
                              </tr>
                             <tr>
                                <th>ALAMAT : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                               <tr>
                                <th>KOTA/PROVINSI: </th>
                                <td><select><option>--pilih--</option></select></td>
                              </tr>

                               <tr>
                                <th>KODE POS : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                               <tr>
                                <th>TELPON : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>
                              <tr>
                                <td colspan="2" style="text-align: center;">Alamat Asal</td>
                              </tr>
                              <tr>
                                <th>NO KTP : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                             <tr>
                                <th>ALAMAT : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                               <tr>
                                <th>KOTA/PROVINSI: </th>
                                <td><select><option>--pilih--</option></select></td>
                              </tr>

                               <tr>
                                <th>KODE POS : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                               <tr>
                                <th>TELPON : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>
                              <tr>
                                <td colspan="2" style="text-align: center;">Alamat Asal</td>
                              </tr>
                              <tr>
                                <th>TEMPAT LAHIR :</th>
                                <td><input type="text" id="fname" name="fname"></td></tr>

                                <tr><th>TANGGAL LAHIR : </th>
                                <td><select>
                                  <option>1</option><option>2</option>
                                  <option>3</option><option>4</option>
                                  <option>5</option><option>6</option>
                                  <option>7</option><option>8</option>
                                  <option>9</option><option>10</option>
                                  <option>11</option><option>12</option>
                                  <option>13</option><option>14</option>
                                  <option>15</option><option>16</option>
                                  <option>17</option><option>18</option>
                                  <option>19</option><option>20</option>
                                  <option>21</option><option>22</option>
                                  <option>23</option><option>24</option>
                                  <option>25</option><option>26</option>
                                  <option>27</option><option>28</option>
                                  <option>29</option><option>30</option>
                                  <option>31</option>
                            </select>-
                                <select><option>JANUARI</option>
                                    <option>FEBRUARI</option>
                                    <option>MARET</option>
                                    <option>APRIL</option>
                                    <option>MEI</option>
                                    <option>JUNI</option>
                                    <option>JULI</option>
                                    <option>AGUSTUS</option>
                                    <option>SEPTEMBER</option>
                                    <option>OKTOBER</option>
                                    <option>NOVEMBER</option>
                                    <option>DESEMBER</option>
                                </select>-
                              
                              <select>
                                <option>1990</option><option>1991</option>
                                <option>1993</option><option>1994</option>
                                <option>1995</option><option>1996</option>
                                <option>1997</option><option>1998</option>
                                <option>1999</option><option>2000</option>
                                <option>2001</option><option>2002</option>
                                <option>2003</option><option>2004</option>
                                <option>2005</option><option>2006</option>
                                <option>2007</option><option>2008</option>
                                <option>2009</option><option>2010</option>
                                <option>2011</option><option>2012</option>
                                <option>2013</option><option>2014</option>
                                <option>2015</option><option>2016</option>
                                
                              </select></td>
                              </tr>
                             <tr>
                                <th>GOLONGAN DARAH : </th>
                                <td><input type="text" id="fname" name="fname"></td>
                              </tr>

                               <tr>
                                <th>TANGGAL MASUK/DITERIMA: </th>
                                <td><select><option>--pilih--</option></select></td>
                              </tr>
                              <tr><th>NAMA AYAH:</th> <td><input type="text" id="fname" name="fname"></td></tr>
                              <tr><th>PEKERJAAN AYAH :</th> <td><input type="text" id="fname" name="fname"></td></tr>
                              <tr><th>NAMA IBU :</th> <td><input type="text" id="fname" name="fname"></td></tr>
                              <tr><th>PEKERJAAN IBU :</th> <td><input type="text" id="fname" name="fname"></td></tr>
                              <tr><th>PENGHASILAN ORANG TUA :</th> <td><input type="text" id="fname" name="fname"></td></tr>
                              <tr><th>ASAL SMU :</th> </th> <td><select><option>JAKARAT</option>
                                              <option>BANDUNG</option>
                                              <option>SEMARANG</option>
                                              <option>DIY</option>
                                              <option>ACEH</option>
                                              <option>PADANG</option>
                                              <option>JAMBI</option>
                                              <option>LOMBOK</option></select></td></tr>
                              <tr><th> KOTA PROVINSI SMU:</th> <td><select><option>JAKARAT</option>
                                              <option>BANDUNG</option>
                                              <option>SEMARANG</option>
                                              <option>DIY</option>
                                              <option>ACEH</option>
                                              <option>PADANG</option>
                                              <option>JAMBI</option>
                                              <option>LOMBOK</option></select></td></tr>
                              <tr><th>NILAI STTB :</th> <td><input type="text" id="fname" name="fname"></td></tr> 
                              <tr><th>NILAI NEM :</th> <td><input type="text" id="fname" name="fname"></td></tr>  
                              <tr><th>TAHUN LULUS SMU :</th> <td><input type="text" id="fname" name="fname"></td></tr>            
                            </table>
                            <button type="submit" class="btn btn-cari" style="margin-left: 45%">REKAM</button>
        </div>
      </div>      
    </div>    
  </div>
</body>
</html>