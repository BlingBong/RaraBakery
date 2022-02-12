<?php
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }
    
    include 'koneksi.php';
    $no = $_GET['no'];

    $query = mysqli_query($konek,"DELETE FROM keranjang WHERE no = '$no'");

    if($query)
    {
        echo "<SCRIPT>
        alert('Produk berhasil dihapus dari keranjang.')
        window.location.replace('cart.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Produk gagal dihapus dari keranjang.')
        window.location.replace('cart.php');
        </SCRIPT>";
    }
?>