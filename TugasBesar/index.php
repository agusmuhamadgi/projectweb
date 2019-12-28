<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Computer Based Information System</title>

	<link href="image/logoupn.png" rel="icon" type="image/png"/>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
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
					?><!-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
				    </div>
				    <div class="form-group col-md-8">
				      <input type="password" class="form-control" id="hasil_id" placeholder="Hasil">
				    </div>
				  </div>
				</form>
			  	<button type="submit" class="btn btn-primary ">Submit</button>
			  </form> 
			</div>

			<div class="col-sm-9 col-md-8">
				<img src="image/gedungupn.jpg" alt="Background Gedung UPN" class="bg-opacity">
			</div>

			<div class="col-sm-1 col-md-2 bglightgreen">
				<div>
					<p class="style-hot-messages">HOT MESSAGES:</p>
					<div class="psize title-messages">Dosen/Karyawan:</div>
					<table class="box-messages-dosen">
					    <tr>
					      <th scope="col">
					      	<marquee scrolldelay ="200" direction="up" height ="200">
					      		<p>Dear mahasiswa, semangat UAS!</p>
					      	</marquee>
					      </th>
					    </tr>
					</table>
				</div>
				<div>
					<div class="psize title-messages">Mahasiswa:</div>
					<table class="box-messages-mahasiswa">
					    <tr>
					      <th scope="col">
					      	<marquee scrolldelay ="200" direction="up" height="300">
					      		<b>Dear dosen, saya pusing</b>
					      	</marquee>
					      </th>
					    </tr>
					</table>
				</div>
			</div>
	  </div>		
	</div>
</body>
</html>