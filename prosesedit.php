<?php 
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }

    include 'koneksi.php';

    $id_akun = $_POST['id_akun'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = mysqli_query($konek,"UPDATE akun SET username='$username', password='$password', namadepan='$namadepan', namabelakang='$namabelakang', alamat='$alamat', telepon='$telepon'
    WHERE id_akun='$id_akun'");
    if($query)
    {
        echo "<SCRIPT>
        alert('Data Berhasil Diubah')
        window.location.replace('account.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Data Gagal Diubah')
        window.location.replace('account.php');
        </SCRIPT>";
    }
?>