<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Rara Bakery | Sign Up</title>

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

        <center>
        <div style="background: url(img/background/sign.jpg); background-size:1000px;">
            <h6 style='color: black;background-color: silver;'>Pendaftaran Akun</h6>
            <br><br>
            <div class="dabox mt-50" style="width: 40%;">
                <img src="img/png/logo_clear.png" width=300px>
                <div class="form-area mt-15">
                    <div class="form-area" style="width: 50%; height: 50%;">
                        <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                            <h2>Pilih File Gambar</h2>
                            <h6><i>format: .jpg, maksimum 10mb</i></h6>
                            <div class="form-control mt-30">
                                <input type="file" name="myfile" required />
                                <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" size="10000000" />
                            </div>    
                            <input class="btn dwelling-btn" type="submit" value="DAFTARKAN AKUN" />
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
        </center>
    
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