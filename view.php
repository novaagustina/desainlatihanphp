<?php
include 'session.php';
$idreg = $_POST["id"];
require_once 'config/koneksi.php';

try{
$sql = "SELECT biodata.id, biodata.id_pendaftar, biodata.pic_location, 
biodata.alamat_rumah, biodata.pendidikan_terakhir, biodata.status,
biodata.kota_lahir, biodata.tgl_lahir, biodata.pekerjaan, biodata.perusahaan,
data_pendaftar.nama_depan, data_pendaftar.nama_belakang, data_pendaftar.email, data_pendaftar.username 
FROM biodata RIGHT JOIN data_pendaftar ON biodata.id = data_pendaftar.id WHERE data_pendaftar.id=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $namadepan = $row['nama_depan'];
    $namabelakang = $row['nama_belakang'];
    $namalengkap = $namadepan . " " . $namabelakang;
    $email = $row['email'];
    $username = $row['username'];
    $photo = $row['pic_location'];
    $alamat = $row['alamat_rumah'];
    $kotalahir = $row['kota_lahir'];
    $tanggallahir = $row['tgl_lahir'];
    $pekerjaan = $row['pekerjaan'];
    $perusahaan = $row['perusahaan'];
    $pendidikan = $row['pendidikan_terakhir'];
    $st =  $row['status'];
    if ($st == "0"){
        $status = "Pegawai";
    }else if ($st == "1"){
        $status = "Operator";
    }else if (is_null($st)){
        $status = "Biodata Lengkap Belum Tersedia! Hubungi user untuk melakukan update data!";
    }    
}

include 'header.php';
?>


<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $photo;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $pekerjaan;?></p>
                      <p class="text-muted font-size-sm"><?php echo $perusahaan;?></p><br/><br/>
                      <a href="<?php echo $photo;?>">Download Foto Profil</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $email;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $username;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kotalahir . " , " . $tanggallahir;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pendidikan Terakhir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $pendidikan;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $status;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>