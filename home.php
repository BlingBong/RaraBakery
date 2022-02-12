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
    <title>Rara Bakery | Beranda</title>

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
                                    <li class="active"><a href="home.php">Beranda</a></li>
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
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Ingin Manis? atau Gurih?</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Percayakan semua pada kami, Rara Bakery menyediakan beraneka macam pilihan roti yang cocok untuk segala kebutuhanmu. Eits, jangan lupa. Ada yang baru lho di setiap bulannya!</p>
                                <a href="home.php#roti" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Lihat Katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Spesial Untuk yang Tersayang</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Semua orang pasti suka dengan perayaan, baik dengan pesta meriah atau bercanda di ruang keluarga. Buat momen bersama yang tersayang menjadi tak terlupakan dengan kue spesial dari Rara Bakery!</p>
                                <a href="home.php#kue" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Lihat Katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Nostalgia ke Masa Kecil</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Merasa jenuh dengan rutinitas di kota? Pernahkah terbesit rasa rindu dengan suasana desa yang tenang dan tentram? Atau dengan makanan yang dibuat oleh nenek sewaktu kecil dulu? Temukan lagi rasa itu dengan jajanan tradisional dari Rara Bakery.</p>
                                <a href="home.php#jajan" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Lihat Katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <center>
            <?php
                include 'koneksi.php';
                $totalroti = 0;
                $roti = mysqli_query($konek, 'SELECT * FROM katalog WHERE kategori = "Roti"');
                while($countroti=mysqli_fetch_array($roti))
                {
                    $totalroti ++;
                }

                $totalkue = 0;
                $kue = mysqli_query($konek, 'SELECT * FROM katalog WHERE kategori = "Kue"');
                while($countkue=mysqli_fetch_array($kue))
                {
                    $totalkue ++;
                }

                $totaljajan = 0;
                $jajan = mysqli_query($konek, 'SELECT * FROM katalog WHERE kategori = "Jajanan Pasar"');
                while($countjajan=mysqli_fetch_array($jajan))
                {
                    $totaljajan ++;
                }
                ?>

            <br>
            <h2 style="color:saddlebrown;"><b>Jumlah Produk</b></h2>
            <br>

            <div class="row align-items-center mt-30">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <a href='home.php#roti'>    
                        <div class="single-cool-fact">
                            <img width="80px" src="img/png/roti.png" alt="">
                            <h3><span class="counter"><?php echo $totalroti;?></span></h3>
                            <h6>Roti</h6>
                        </div>    
                    </a>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <a href='home.php#kue'>    
                        <div class="single-cool-fact">
                            <img width="80px" src="img/png/kue.png" alt="">
                            <h3><span class="counter"><?php echo $totalkue;?></span></h3>
                            <h6>Kue</h6>
                        </div>
                    </a>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <a href='home.php#jajan'>    
                        <div class="single-cool-fact">
                            <img width="80px" src="img/png/jajan.png" alt="">
                            <h3><span class="counter"><?php echo $totaljajan;?></span></h3>
                            <h6>Jajanan Pasar</h6>
                        </div>
                    </a>
                </div>
            </div>

        <hr width="90%">

        <div id="roti">
            <br>
                <h2 style="color:saddlebrown;"><b>Katalog Roti</b></h2>
            <br>
            <table>
                <?php
                    $query = mysqli_query($konek, "SELECT * from katalog WHERE kategori = 'Roti'");

                    while($data=mysqli_fetch_array($query))
                    {?>
                        <tr>                            
                            <td>
                                <?php echo '<img src="img/preview/preview('.$data['id'].').jpg" width=250px>'; ?>
                            </td>
                            <td>
                                <h4><?php echo $data['nama'];?></h4>
                                <?php $harga=number_format($data['harga'],0,",","."); ?>
                                <h6 style="color:gray;">Rp<?php echo $harga;?>,00</h6>
                                <br>
                                <a href=detail.php?id=<?php echo $data['id'];?>><button class="btn dwelling-btn" type="button">Lihat Detail</button></a>
                            </td>
                        <?php }
                        ?>
                        </tr>
            </table>
        </div>

        <div id="kue">
            <br>
                <h2 style="color:saddlebrown;"><b>Katalog Kue</b></h2>
            <br>
            <table>
                <?php
                    $query = mysqli_query($konek, "SELECT * from katalog WHERE kategori = 'Kue'");

                    while($data=mysqli_fetch_array($query))
                    {?>
                        <tr>                            
                            <td>
                                <?php echo '<img src="img/preview/preview('.$data['id'].').jpg" width=200px>'; ?>
                            </td>
                            <td>
                                <h4><?php echo $data['nama'];?></h4>
                                <?php $harga=number_format($data['harga'],0,",","."); ?>
                                <h6 style="color:gray;">Rp<?php echo $harga;?>,00</h6>
                                <br>
                                <a href=detail.php?id=<?php echo $data['id'];?>><button class="btn dwelling-btn" type="button">Lihat Detail</button></a>
                            </td>
                        <?php }
                        ?>
                        </tr>
            </table>
        </div>

        <div id="jajan">
            <br>
                <h2 style="color:saddlebrown;"><b>Katalog Jajanan Pasar</b></h2>
            <br>
            <table>
                <?php
                    $query = mysqli_query($konek, "SELECT * from katalog WHERE kategori = 'Jajanan Pasar'");

                    while($data=mysqli_fetch_array($query))
                    {?>
                        <tr>                            
                            <td>
                                <?php echo '<img src="img/preview/preview('.$data['id'].').jpg" width=200px>'; ?>
                            </td>
                            <td>
                                <h4><?php echo $data['nama'];?></h4>
                                <?php $harga=number_format($data['harga'],0,",","."); ?>
                                <h6 style="color:gray;">Rp<?php echo $harga;?>,00</h6>
                                <br>
                                <a href=detail.php?id=<?php echo $data['id'];?>><button class="btn dwelling-btn" type="button">Lihat Detail</button></a>
                            </td>
                        <?php }
                        ?>
                        </tr>
            </table>
        </div>
        
        <br>
        <a href=cart.php><button class="btn dwelling-btn mb-100" type="button">LIHAT KERANJANG</button></a>
        <hr width="90%">
        </center>

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area background bg-overlay mt-100" style="background-image: url(img/background/cp.jpg);">
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