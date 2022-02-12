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
    <title>Rara Bakery | Riwayat Belanja</title>

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
                                    <li  class="active"><a href="cart.php">Keranjang</a></li>
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

        <center>
            <hr width="90%">
            <!-- ##### Breadcumb Area Start ##### -->
            <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/background/breadcumb3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="breadcumb-text text-center">
                                <h2>Riwayat Belanja</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Breadcumb Area End ##### -->

        <h2 class="mt-50" style="width: 80%; background-color: wheat; padding: 5px;">Menunggu Pembayaran</h2>

        <table style="width:80%;" class="mb-30" border="1">
            <tr>
                <th>Kode</th>
                <th>Tanggal</th>
                <th>Nama Produk</th>
                <th>Subtotal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>

            <?php
                include 'koneksi.php';

                $query = mysqli_query($konek, "SELECT * from riwayat WHERE status='Belum Dibayar'");

                while($data=mysqli_fetch_array($query))
                {?>
                    <tr>                            
                        <td><?php echo 'RB'.$data['indeks'];?></td>
                        <td><?php echo $data['tanggal'];?></td>
                        <td style="text-align:left;"><?php echo $data['nama'].' ('.$data['jumlah'].')';?></td>
                        <?php $total=number_format($data['total'],0,",","."); ?>
                        <td style="text-align:left;"><?php echo 'Rp'.$total.',00';?></td>
                        <td><?php echo $data['status'];?></td>
                        <td>
                            <a href=payment.php?indeks=<?php echo $data['indeks'];?>><button class="btn dwelling-btn" type="button">Bayar</button></a>
                        </td>
            <?php }
            ?>
                    </tr>
            </table>

        <h2 class="mt-50" style="width: 80%; background-color: wheat; padding: 5px;">Pembayaran Terkonfirmasi</h2>

        <table style="width:80%;" class="mb-30" border="1">  
            <tr>
                <th>Kode</th>
                <th>Tanggal</th>
                <th>Nama Produk</th>
                <th>Subtotal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>

            <?php
                include 'koneksi.php';

                $query = mysqli_query($konek, "SELECT * from riwayat WHERE status='Sudah Dibayar'");

                while($data=mysqli_fetch_array($query))
                {?>
                    <tr>                            
                        <td><?php echo 'RB'.$data['indeks'];?></td>
                        <td><?php echo $data['tanggal'];?></td>
                        <td style="text-align:left;"><?php echo $data['nama'].' ('.$data['jumlah'].')';?></td>
                        <?php $total=number_format($data['total'],0,",","."); ?>
                        <td style="text-align:left;"><?php echo 'Rp'.$total.',00';?></td>
                        <td><?php echo $data['status'];?></td>
                        <td>
                            <a href=payment.php?indeks=<?php echo $data['indeks'];?>><button class="btn dwelling-btn" type="button">Lihat Nota</button></a>
                        </td>
            <?php }
            ?>
                </tr>
        </table>
        <br>
        <div class="mb-30">
            <a href=cart.php><button class="btn dwelling-btn" type="button">KEMBALI</button></a>
        </div>
        </center>

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