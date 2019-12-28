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
			  	<button type="submit" class="btn btn-primary mb-4">Submit</button>
			  </form> 
			</div>

			<div class="col-sm-10 col-md-10" bgcolor-tengah>
				<div>
					<h5 class="title-kalendar-akademik">KALENDER AKADEMIK TA. 2019-2020</h5>
					<h5 class="title-kalendar-akademik">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK UPNVY</h5>
				</div>
				<div>
					<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">Kegiatan</th>
					      <th scope="col">Semester Gasal</th>
					      <th scope="col">Semester Genap</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					  		<th colspan="3">I. PERSIAPAN:</th>
					  	</tr>
					  	<tr>
					  		<td>Pengajuan izin Cuti akademik</td>
					  		<td>17 Juni s.d 24 Juli 2019</td>
					  		<td>16 Des 2019 s.d 13 Januari 2020</td>
					    </tr>
					    <tr>
					    	<th colspan="3">II. PERKULIAHAN & EVALUASI BELAJAR:</th>
					    </tr>
					    <tr>
					    	<td>Kuliah dan Praktikum (sebelum UTS)</td>
					    	<td>19  Agust s.d 04 Okt 2019</td>
					    	<td>27 Jan. s.d 13 Maret 2020</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<div class="sign-kalendar">Kasubag Dikjar Fisip</div>
			</div>
	  </div>		
	</div>
</body>
</html>