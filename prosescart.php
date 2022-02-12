<?php
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: login.php?pesan=belum_login");
        exit;
    }

    include 'koneksi.php';
    $id = $_POST['id'];
    $jumlah = $_POST['jumlah'];

    $cid = $id;
    $cjumlah = $jumlah;

    $query = mysqli_query($konek, "SELECT * from katalog WHERE id = $id");
    while($data=mysqli_fetch_array($query))
    {          
            $cnama = $data['nama'];
            $ckategori = $data['kategori'];
            $charga = $data['harga'];
    }
    
    $ctotal = $cjumlah * $charga;

    $query=mysqli_query($konek, "INSERT INTO keranjang VALUES ('','$cid','$cnama','$ckategori','$charga','$cjumlah','$ctotal')")
    or die(mysqli_error($konek));

    if($query)
    {
        echo "<SCRIPT>
        alert('Produk berhasil dimasukkan ke keranjang.')
        window.location.replace('cart.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Produk gagal dimasukkan ke keranjang.')
        window.location.replace('detail.php?id=$cid');
        </SCRIPT>";
    }
?>