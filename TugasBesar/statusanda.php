<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Computer Based Information System</title>
	<link href="image/logoupn.png" rel="icon" type="image/png"/>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
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
			  	<br><br><br><br><br><br><br>
        	</div>

			<div class="col-sm-10 col-md-10" bgcolor-tengah>
				<div class="col-sm-10 col-md-10" style="margin-left: 10px; margin-top: 10px;">
					<form>
						<div class="form-row">
							<div class="form-group">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><g fill="#010101"><circle cx="7" cy="14" r="3"/><circle cx="11" cy="6" r="3"/>
									<circle cx="16.6" cy="17.6" r="3"/></g>
								</svg>
							</div>
							<div class="form-group">
								<h5 style="padding-top: 2px; margin-left: 2px;">STATUS ANDA</h5>
							</div>
						</div>						
					</form>	
				</div>
				<hr>
					
					<style>
							#customers {
							  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
							  border-collapse: collapse;
							  width: 100%;
							}

							#customers td, #customers th {
							  border: 1px solid #ddd;
							  padding: 5px;
							}

							#customers tr:nth-child(even){background-color: #f2f2f2;}

							#customers tr:hover {background-color: #ddd;}

							#customers th {
							  padding-top: 5px;
							  padding-bottom: 8px;
							  text-align: left;
							  background-color: #4CAF50;
							  color: white;
							}
							</style>

								<p>DAFTAR PINJAMAN</p>

								<table id="customers">
								  <tr>
								    <th>NO.</th>
								    <th>ID</th>
								    <th>JUDUL</th>
								    <th>WAKTU PINJAM</th>
								    <th>WAJIB KEMBALI</th>
								    <th>DENDA</th>
								  </tr>
								  <tr>
								    <td colspan="6"><center>TIDAK ADA<center></td>
								  </tr>
								  <tr>
								  </table>

								  	<br>
								  	<p>DAFTAR BUKU SIAP DI AMBIL</p>
								  	<table id="customers">
								  <tr>
								    <th>NO.</th>
								    <th>ID</th>
								    <th>JUDUL</th>
								    <th>MASA PINJAM</th>
								  </tr>
								  <tr>
								    <td colspan="4"><center>TIDAK ADA<center></td>
								  </tr>
								  <tr>
								</table>

								  	<br>
								  	<p>DAFTAR RESERVASI BUKU</p>
								  	<table id="customers">
								  <tr>
								    <th>NO.</th>
								    <th>ID</th>
								    <th>JUDUL</th>
								    <th>WAKTU RESV</th>
								  </tr>
								  <tr>
								    <td colspan="4"><center>TIDAK ADA<center></td>
								  </tr>
								  <tr>
								  </tr>
								</center>

		</div>
	</div>
</table>
</body>
</html>