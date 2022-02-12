<?php

    include 'koneksi.php';

    function registrasi($data) {
        global $konek;

        $username = $data['username'];
        $namadepan = $data['namadepan'];
        $namabelakang = $data['namabelakang'];
        $telepon = $data['telepon'];
        $alamat = $data['alamat'];
        $password = $data['password'];

        $usercheck = mysqli_query($konek, "SELECT username FROM akun WHERE username = '$username'");

        if ( mysqli_fetch_assoc($usercheck) ) {
            echo "<center><h6 style='color: white;background-color: red;'>username sudah dipakai, mohon masukkan username lain.</h6></center>";
            return false;
        }

        $query = mysqli_query($konek, "INSERT INTO akun VALUES ('', '$username', '$password', '$namadepan', '$namabelakang', '$alamat', '$telepon')");

        return mysqli_affected_rows($konek);
    }


?>