<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM akun WHERE username = '$username' && password = '$password'")
    or die (mysqli_error($konek));

    $cek = mysqli_num_rows($query);

    while($data=mysqli_fetch_array($query))
    {
        $id = $data['id_akun'];
    }

    if($cek > 0)
    {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;

        header("location:home.php");
    }
    else
    {
        header("location:login.php?pesan=gagal");
    }
?>