<?php 
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }

    include 'koneksi.php';

    $indeks=$_GET['indeks'];
    $status = $_POST['status'];

    $query = mysqli_query($konek,"UPDATE riwayat SET status='$status' WHERE indeks='$indeks'");
    if($query)
    {
        echo "<SCRIPT>
        window.location.replace('history.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Proses pembayaran gagal.')
        window.location.replace('account.php');
        </SCRIPT>";
    }
?>