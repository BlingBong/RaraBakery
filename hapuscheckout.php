<?php
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }
    
    include 'koneksi.php';
    $indeks=$_GET['indeks'];

    $query = mysqli_query($konek,"DELETE FROM keranjang");

    if($query)
    {
        echo "<SCRIPT>
        window.location.replace('payment.php?indeks=$indeks');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Proses checkout gagal.')
        window.location.replace('cart.php');
        </SCRIPT>";
    }
?>