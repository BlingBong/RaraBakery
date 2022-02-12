<?php
    include 'prosesregister.php';

    if ( isset($_POST['regist']) ) {
        if ( registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('Akun baru berhasil ditambahkan!');
                 </script>";
            header("Location: input.php");
        } else {
            echo mysqli_error($konek);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Rara Bakery | Sign Up</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/png/icon.png"/>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/png/icon.png" alt="">
    </div>

    <center>
        <div style="background: url(img/background/sign.jpg); background-size: 1000px;">
            <?php
                echo "<h6 style='color: black;background-color: silver;'>Pendaftaran Akun</h6>";
            ?>
            <div class="dabox mt-50" style="width: 40%;">
                <img src="img/png/logo_clear.png" width=300px>
                <div class="form-area mt-15">
                        <form action="" method="POST">
                        <h5 style="background-color: peru;">Username</h5>
                        <input class="form-control" type="text" name="username" required placeholder="isikan username">
                        <h5 style="background-color: peru;">Nama Depan</h5>
                        <input class="form-control" type="text" name="namadepan" required placeholder="isikan nama depan">
                        <h5 style="background-color: peru;">Nama Belakang</h5>
                        <input class="form-control" type="text" name="namabelakang" required placeholder="isikan nama belakang">
                        <h5 style="background-color: peru;">Nomor Telepon</h5>
                        <input class="form-control" type="tel" name="telepon" required placeholder="isikan nomor telepon">
                        <h5 style="background-color: peru;">Alamat</h5>
                        <textarea class="form-control" rows="10" cols="50" name="alamat" required placeholder="isikan alamat"></textarea>
                        <h5 style="background-color: peru;">Password</h5>
                        <input class="form-control" type="password" name="password" placeholder="isikan password">
                        <button class="btn dwelling-btn mt-15" type="submit" name="regist"><i>LANJUT</i></button>
                    </form>
                    <br>
                    <h5 class="mt-30" style="color: black;">Sudah memiliki akun?</h5>
                    <a class="dalink" href=login.php>LOGIN</button></a>
                </div>
                <br><br><br>
            </div>
        </div>
    </center>
    
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>