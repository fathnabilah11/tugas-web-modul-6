<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	<header>
		<h1 class="judul">BUKU TAMU</h1>
		<p class="deskripsi"> Masukkan Form dibawah ini</p>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="home.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Nama</b></label>
							<input type="text" placeholder="Masukkan Nama" name="nama">					
						<label><b>Email</b></label>
							<input type="text" placeholder="Masukkan Email" name="email">
						<label><b>Isi</b></label>
							<input type="text" placeholder="Masukkan Isi" name="isi">
					
						<button type="submit" name="submit">Kirim</button>
						<button type="reset" name="reset">Hapus</button>
   						 
  					</div>
				</form>

			
</body>
</html>