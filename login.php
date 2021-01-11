<?php
include "header.php";
?>

<body>
    <!-- buat class container -->
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <!-- membuat form -->
            <form class="col-lg-6" action="config/login.php" method="POST">
                <center>
                    <h2>LOGIN</h2>
                </center>
                <center> <img src="image/sttb.jpg" width="150px" height="150px"></center>
                <!-- baris ke 2 pada form -->
                <div class="form-group col-md-12">
                    <label for="contoh2">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group col-md-12">
                    <label for="contoh2">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <center><button name="login" type="submit" class="btn btn-primary col-md-6">Login</button></center>
        </div>
        <!-- end baris 2 pada form -->
        </form>
        <!-- end form -->
    </div>
    </div>
    <!-- end container -->
</body>

</html>