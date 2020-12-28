<?php
include 'config/data_register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    
    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <div class="container"> 
            <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()):
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $email = $row['email'];
                    $username = $row['username'];
                    ?>
                    <tr>
                        <td><?php echo $namalengkap;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $username;?></td>
                        <td><button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button> </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable(
            {
                "aLengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                ],
                "iDisplayLength": 5
            }
        );
    });
</script>

</html>