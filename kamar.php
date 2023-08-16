<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green Penginapan Sugihen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="template1/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="template1/css/bootstrap.min.css">
    <link rel="stylesheet" href="template1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template1/css/magnific-popup.css">
    <link rel="stylesheet" href="template1/css/font-awesome.min.css">
    <link rel="stylesheet" href="template1/css/themify-icons.css">
    <link rel="stylesheet" href="template1/css/nice-select.css">
    <link rel="stylesheet" href="template1/css/flaticon.css">
    <link rel="stylesheet" href="template1/css/gijgo.css">
    <link rel="stylesheet" href="template1/css/animate.css">
    <link rel="stylesheet" href="template1/css/slicknav.css">
    <link rel="stylesheet" href="template1/css/style.css">
    <!-- <link rel="stylesheet" href="template1/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <ul id="navigation">
                                        <li><a  href="index.php">home</a></li>
                                        <li><a class="active" href="kamar.php">kamar</a></li>
                                        <li><a href="fasilitas.php">fasilitas</a></li>
                                        <li><a href="login.php">login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Reservasi</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Room</h3>
        <h3>Green Penginapan Sugihen</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
        <?php
            include('koneksi.php');
            $no = 1;
            $query = mysqli_query($koneksi,"SELECT * FROM kamar");
            while ($row = mysqli_fetch_array($query)){
            ?>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/<?php echo $row["gambar_kamar"]; ?>" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span><?php echo $row  ['fasilitas_kamar'] ?></span>
                            <span><?php echo $row  ['jumlah_kasur'] ?>Bed</span>
                            <h3><?php echo $row  ['nama_kamar'] ?></h3>
                            <h3><?php echo $row  ['harga_kamar'] ?>K</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- features_room_end -->
    
    <!-- footer -->
    <footer class="footer" >
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Lokasi
                            </h3>
                            <p class="footer_text"> 2023, Green Penginapan Sugihen, Kec. Juhar, <br>
                                Kab. Karo</p>
                            <a href="#" class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Hubungi Kami
                            </h3>
                            <p class="footer_text">+62857 6687 2290 <br>
                                @Greenpenginapansugihen.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigation
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Kamar</a></li>
                                <li><a href="#">fasilitas</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit" >Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> STMIK Kristen Neumann Indonesia | SIRPSugihen <i aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Zisan Bayu Ginting</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   <!-- form itself end-->
   <form id="test-form" class="white-popup-block mfp-hide" action="simpan.php" method = "post">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Reservation</h3>
                            <form >
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input class = "form-control" type="text" name="nama_pemesan" placeholder="Nama Pemesan">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input class = "form-control"type="text" name="email" placeholder="email">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input class = "form-control"type="phone_num" name="no_hp" placeholder="Nomor Handphone">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input class = "form-control"type="text" name="nama_tamu" placeholder="Nama Tamu">
                                    </div>
                                    <div class="col-xl-6">
                                        <input id="datepicker2" name="cekin" placeholder="Check in date">
                                    </div>
                                     <div class="col-xl-6">
                                        <input id="datepicker" name="cekout" placeholder="Check out date">
                                    </div>
                                    <div class="col-xl-12">
                                        <input class = "form-control"type="number" name="jumlah" placeholder="Jumlah Kamar">
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" name="room_tipe" id="default-select" class="">
                                            <option data-display="Room type">Room type</option>
                                            <option value="1">Superior Room</option>
                                            <option value="2">Family Room</option>
                                            <option value="3">Single Room</option>
                                            <option value="4">Couple Room</option>
                                            <option value="5">VVIP</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
            
    <!-- form itself end -->


    <!-- JS here -->
    <script src="template1/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="template1/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="template1/js/popper.min.js"></script>
    <script src="template1/js/bootstrap.min.js"></script>
    <script src="template1/js/owl.carousel.min.js"></script>
    <script src="template1/js/isotope.pkgd.min.js"></script>
    <script src="template1/js/ajax-form.js"></script>
    <script src="template1/js/waypoints.min.js"></script>
    <script src="template1/js/jquery.counterup.min.js"></script>
    <script src="template1/js/imagesloaded.pkgd.min.js"></script>
    <script src="template1/js/scrollIt.js"></script>
    <script src="template1/js/jquery.scrollUp.min.js"></script>
    <script src="template1/js/wow.min.js"></script>
    <script src="template1/js/nice-select.min.js"></script>
    <script src="template1/js/jquery.slicknav.min.js"></script>
    <script src="template1/js/jquery.magnific-popup.min.js"></script>
    <script src="template1/js/plugins.js"></script>
    <script src="template1/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="template1/js/contact.js"></script>
    <script src="template1/js/jquery.ajaxchimp.min.js"></script>
    <script src="template1/js/jquery.form.js"></script>
    <script src="template1/js/jquery.validate.min.js"></script>
    <script src="template1/js/mail-script.js"></script>

    <script src="template1/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>