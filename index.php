<?php
include 'session.php';
include 'config/data_register.php';
include 'header.php';
?>


<body>
    <a href="config/logout.php">Logout</a>

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
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $email = $row['email'];
                    $username = $row['username'];
                ?>
                    <tr>
                        <td><?php echo $namalengkap; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $username; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <input type="hidden" name="namadepan" value="<?php echo $namadepan; ?>" />
                                <input type="hidden" name="namabelakang" value="<?php echo $namabelakang; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <!-- form view -->
                            <form action="view.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-success">Detail View</button>
                            </form>

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>

</html>