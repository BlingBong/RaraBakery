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
    <title>Rara Bakery | Tentang Kami</title>

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
                                    <li class="active"><a href="about.php">Tentang Kami</a></li>
                                    <li><a href="account.php">Akun Saya</a></li>
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
    <center><hr width="90%"></center>

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-80" id="about">
     <center>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>Apa itu <i>Rara Bakery</i>?</h3>
                        </div>

                        <h6 class="sub-heading pb-5"><i>Rara Bakery</i> merupakan perusahaan yang bergerak di bidang bakery. Mulai dari roti, kue, hingga jajanan tradisional.</h6>
                        <p class="text-center" style="color:dimgrey;">
                            Berbasis di Prambanan, semua produk di <i><b>Rara Bakery</b></i> dibuat oleh tangan handal @dyah_irawati & @r_febiyanto. Berawal dari sebagai anak perusahaan kuliner Little Meal Bento, pada tahun 2020 <i><b>Rara Bakery</b></i> secara resmi mengukuhkan diri sebagai usaha bakery sendiri. <br>
                            Semua produk roti di <i><b>Rara Bakery</b></i> sudah lulus uji klinis dari laboratorium Dinas Kesehatan Klaten. Ditambah lagi semua bahan di <i><b>Rara Bakery</b></i> sudah diorganikkan dengan probiotik siklus,
                            sehingga semua produk kami dijamin menyehatkan dan sangat disarankan untuk dikonsumsi sehari-hari. <br>
                            Acara apapun, percayakan kepada kami yaaa.
                        </p>
                        <img class="mb-70" src="img/background/about.jpg">
                    </div>
                </div>

                <hr width="90%">

                <div class="row">
                    <div class="col-12">
                        <div class="mb-30">
                            <br>
                            <h3>Kunjungi Offline Store Kami!</h3>
                        </div>
                        <h6 style="color:dimgrey;" class="mb-30"><i>Rara Bakery</i> buka setiap hari mulai pukul 09.00-17.00 WIB.</h6>
                        <a class="mb-70" href="https://goo.gl/maps/9F9DQgxKe7cXNGkT8" target="_blank"><img style="border: 5px solid #ddd;" src="img/background/location.png"></a>
                    </div>
                </div>

                <hr width="90%">

                <div class="row">
                    <div class="col-12 mb-50">
                        <div class="mb-30">
                            <br>
                            <h3>Dukung Kami</h3>
                        </div>
                        <h6 style="color:dimgrey;" class="mb-80">Selalu support <i>Rara Bakery</i> lewat media sosial dan dapatkan update terbaru dari kami.</h6>
                        <a class="p-5" href="https://web.facebook.com/rarabakeryprambanan" target="_blank"><img src="img/png/fb.png" width="75px"></a>
                        <a class="p-5" href="https://www.instagram.com/littlemealbento" target="_blank"><img src="img/png/ig.png" width="75px"></a>
                        <a class="p-5" href="https://t.me/RaraBakeryPrambanan" target="_blank"><img src="img/png/tele.png" width="75px"></a> 
                    </div>
                </div>
            </div>
        </center>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area background bg-overlay" style="background-image: url(img/background/cp.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2>Contact Person</h2>
                        <p>Punya kritik, saran, atau butuh bantuan? Jangan ragu untuk menghubungi <i>Rara Bakery</i>!</p>
                        <a href="https://wa.me/c/6285292197466" target="_blank" class="btn dwelling-btn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

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