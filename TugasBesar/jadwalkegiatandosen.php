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

			  <div class="box-catalogue">
			  	<div>
					<a href="index.php" class="menu">Selamat Datang</a>	
				</div>
				<div>
					<a href="kalenderakademik.php" class="menu">Kalender Akademik</a>
				</div>
			  	<div>
			  		<a href="jadwaldosen.php" class="menu">Jadwal Dosen</a>
			  	</div>
				  <a href="#" class="menu">E-Journal</a>
			  </div>
			  <p class="text-center colorwhite psize">Download Manual Pembayaran SPC BNI '46</p>
			  <div class="box-atm">
			  	<div>
			  		<a href="file/atm.exe" class="psize">Manual BNI '46-atm</a>
			  	</div>
			  	<div>
			  		<a href="file/internet.exe"  class="psize">Manual BNI '46-eBanking</a>				  		
			  	</div>	  	
			  </div>

			  <form>
			  	<div class="form-group">
			  		<input type="text" class="form-control" id="user_id" placeholder="Login">
			  	</div>
			  	<div class="form-group">
			  		<input type="password" class="form-control" id="pass_id" placeholder="Password">
			  	</div>
			  	<form>
				  <div class="form-row">
				    <div class="form-group col-md-4">
				      <?php
						$start = rand(1, 11);
						$end = rand(1, 11);
						echo $start . " + ". $end;
							
						$count = $start + $end;

						if ($count >= 15) {
							$count -= 5;
						} else {
							$count -=  2;
						}
						// // mencari nilai benar box-hasil-captcha
					 //    if ($count != 1) {
					 //        echo "salah \n";
					 //    } else {
					 //        echo "Benar: ". $count ." \n";
					 //    }
					?>
				    </div>
				    <div class="form-group col-md-8">
				      <input type="password" class="form-control" id="hasil_id" placeholder="Hasil">
				    </div>
				  </div>
				</form>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<br>
				<br>
			  </form> 
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
								<h5 style="padding-top: 2px; margin-left: 2px;">JADWAL KEGIATAN DOSEN</h5>
							</div>
						</div>
						<div class="all-text" style="margin-left: 20px;">Nama dosen</div>
							<div class="all-text" style="margin-left: 20px;">Semester dosen</div>						
					</form>	
				</div>
					<hr>

				<div class="form-group" style="margin-left: 20px;">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path d="M0 0h24v24H0z" fill="none"/>
						<path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/>
					</svg>
				</div>

				<div class="table-responsive">
					<table class="table text-dsn">
						<tr>
							<th>PROGRAM STUDI</th>
							<th>JURUSAN</th>
							<th>KODE MK</th>
							<th>NAMA MK</th>
							<th>SKS</th>
							<th>KELAS</th>
							<th>JML MHS</th>
							<th>HARI</th>
							<th>JAM</th>
							<th>RUANG</th>
							<th>PASANGAN</th>
						</tr>
						<tr>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
							<td>PROGRAM STUDI</td>
						</tr>
					</table>
				</div>
				<br>

				<div  style="margin-left: 20px;">Jadwal Ujian</div>
				<div class="table-responsive">
					<table class="table text-dsn">
						<tr>
							<th>UJIAN</th>
							<th>KODE MK</th>
							<th>NAMA MK</th>
							<th>SKS</th>
							<th>KELAS</th>
							<th>TANGGAL</th>
							<th>JAM</th>
							<th>RUANG</th>
						</tr>
						<tr>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
							<td>UJIAN</td>
						</tr>
					</table>
				</div>
			</div>
			
	  </div>		
	</div>
</body>
</html>