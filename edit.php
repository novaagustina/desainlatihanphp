<html>

<head>
	<title>Latihan Grid Bootstrap</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Registrasi</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			<!-- membuat form -->
			<form class="col-lg-6">
				<h5>Registrasi</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" id="namadepan" placeholder="Nama Depan">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" id="namabelakang" placeholder="Nama Belakang">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Username" readonly>
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Password</label>
						<input type="text" class="form-control" id="password" placeholder="Password" readonly>
					</div>
				</div>
				<!-- end baris 2 pada form -->
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>