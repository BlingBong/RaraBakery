<?php
    session_start();
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
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
    <title>Rara Bakery | Edit Akun</title>

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

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="home.php"><img src="img/png/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="home.php">Beranda</a></li>
                                    <li><a href="cart.php">Keranjang</a></li>
                                    <li><a href="#">Katalog</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="home.php#roti" onMouseOver="this.style.color='saddlebrown'"
                                                onMouseOut="this.style.color='black'">Roti</a>
                                            </li>
                                            <li>
                                                <a href="home.php#kue" onMouseOver="this.style.color='saddlebrown'"
                                                onMouseOut="this.style.color='black'">Kue</a>
                                            </li>
                                            <li>
                                                <a href="home.php#jajan" onMouseOver="this.style.color='saddlebrown'"
                                                onMouseOut="this.style.color='black'">Jajanan Tradisional</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">Tentang Kami</a></li>
                                    <li class="active"><a href="account.php">Akun Saya</a></li>
                                    <li>
                                        <?php echo "<h6>Hai, ".$username."!</h6>";?>
                                        <?php echo '<img width="75px" src="img/user/user('.$id.').jpg" style="border-radius: 50%;" alt="Belum Ada Foto">'; ?>
                                    </li>
                                    
                                    <!-- <li>
                                        <a style="background-color: black; color: white;" href=logout.php><i>LOG OUT</i></a>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
        
        <center>
            <hr width="90%">
            <!-- ##### Breadcumb Area Start ##### -->
                <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/background/breadcumb4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="breadcumb-text text-center">
                                    <h2>Edit Data Akun</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ##### Breadcumb Area End ##### -->

        <?php 
            include 'koneksi.php';
            $id_akun = $id;
            $data = mysqli_query($konek,"SELECT * FROM akun WHERE id_akun = '$id_akun'");
            while($hasil = mysqli_fetch_array($data)){
        ?>
        
        <div class="form-area mt-50" style="width: 40%;">
            <form method="POST" action="prosesedit.php">
                <input type="hidden" name="id_akun" value="<?php echo $hasil['id_akun'];?>">
                <h5 style="background-color: peru;">Username</h5>
                <input class="form-control" type="text" name="username" required value="<?php echo $hasil['username'];?>">
                <h5 style="background-color: peru;">Nama Depan</h5>
                <input class="form-control" type="text" name="namadepan" required value="<?php echo $hasil['namadepan'];?>">
                <h5 style="background-color: peru;">Nama Belakang</h5>
                <input class="form-control" type="text" name="namabelakang" required value="<?php echo $hasil['namabelakang'];?>">                   
                <h5 style="background-color: peru;">Alamat</h5> 
                <textarea class="form-control" name="alamat" required><?php echo $hasil['alamat'];?></textarea>
                <h5 style="background-color: peru;">Nomor Telepon</h5>
                <input class="form-control" type="text" name="telepon" required value="<?php echo $hasil['telepon'];?>">
                <h5 style="background-color: peru;">Password</h5>
                <input class="form-control" type="text" name="password" required value="<?php echo $hasil['password'];?>">
                    
                <button type="reset" name="batal" class="btn dwelling-btn mt-30 mb-50 mr-15"><i>RESET</i></button>
                <button type="submit" name="simpan" class="btn dwelling-btn mt-30 mb-50 ml-15"><i>SIMPAN PERUBAHAN</i></button>

            </form>
        </div>
        <?php } ?>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="https://web.facebook.com/rarabakeryprambanan"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/littlemealbento"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://wa.me/c/6285292197466"  target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="https://t.me/RaraBakeryPrambanan"  target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                    <!-- Copyright -->
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Little Meal Bento - Rara bakery. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

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