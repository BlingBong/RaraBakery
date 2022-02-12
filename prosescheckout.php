<?php
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }
    
    date_default_timezone_set("Asia/Jakarta");

    include 'koneksi.php';

    $hasil = false;
    $status = 'Belum Dibayar'; //status awal

    $indeks = 1;
    $ind = mysqli_query($konek, "SELECT * from riwayat");
    while($data=mysqli_fetch_array($ind))
    {
        $indeks += $data['indeks'];
    }

    $query = mysqli_query($konek, "SELECT * from keranjang");
    while($data=mysqli_fetch_array($query))
    {          
            $nama = $data['nama'];
            $harga = $data['harga'];
            $jumlah = $data['jumlah'];
            $total = $data['total'];
            $tanggal = date('Y-m-d H:i:s');

            $result=mysqli_query($konek, "INSERT INTO riwayat VALUES ('','$nama','$harga','$jumlah','$total','$tanggal','$status', '$indeks')")
            or die(mysqli_error($konek));
            if($result)
            {
                $hasil = true;
            }
    }

    if($hasil=true)
    {
        echo "<SCRIPT>
        window.location.replace('hapuscheckout.php?indeks=$indeks');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Proses checkout gagal.')
        window.location.replace('checkout.php');
        </SCRIPT>";
    }
?>