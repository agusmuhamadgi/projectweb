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
				<br><br>			  	
			  </form> 
			</div>

			<div class="col-sm-10 col-md-10" bgcolor-tengah>
				<div class="col-sm-10 col-md-10" style="margin-left: 10px; margin-top: 10px;">
					<form>
						<div class="form-row">
							<div class="form-group">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
									<path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
									<path d="M0 0h24v24H0z" fill="none"/>
								</svg>
							</div>
							<div class="form-group">
								<h5 style="padding-top: 2px; margin-left: 2px;">CARI JADWAL KEGIATAN BELAJAR</h5>
							</div>
						</div>						
					</form>	
				</div>
					<hr>
				<div>
					<table class="table table-border table-jadwal-dosen" style="margin-left: 20%;">
						<tr>
							<td align="center" class="bggreen">DOSEN:</td>
							<td align="center">
								<select name="dosen">
					    			<option value="666444|HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI">HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI</option>
					    			<option value="666444|HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI">HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI</option>
					    			<option value="666444|HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI">HERY SUTANTO,DRS,MM/AYN WARSIKI,DRA,M.SI</option>
					    		</select>
							</td>
						</tr>
						<tr>
							<td align="center" class="bggreen">SESI:</td>
							<td align="center">
								<select name="tahun_kuliah">
					    			<option value="2019|2|SEMESTER GENAP|150">SEMESTER GENAP 2019/2018 Fakultas ISIP</option>
					    			<option value="2019|1|SEMESTER GENAP|150">SEMESTER GENAP 2019/2018 Fakultas ISIP</option>
					    			<option value="2018|2|SEMESTER GENAP|150">SEMESTER GENAP 2018/2019 Fakultas ISIP</option>
					    		</select>
							</td>
						</tr>
					</table>
					<button type="submit" class="btn btn-cari" style="margin-left: 45%">CARI</button>
				</div>
			</div>
			
	  </div>		
	</div>
</body>
</html>