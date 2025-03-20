<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WA! JU! - SeWA BaJU</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="..\footer\footer.css">

        <!-- Menggunakan Bootstrap CSS dari file lokal -->
        <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Menggunakan Bootstrap CSS dari file lokal -->
        <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Bootstrap JS dari file lokal -->
        <script src="..\bootstrap\js\bootstrap.min.js"></script>

        <!-- Link to Google Font Icon -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add_shopping_cart" />

        <!-- Link to SwiperJS CSS (Slider Foto) -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

        <!-- Logo Tab -->

        <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">

        <style>

            .navbar {
                background-image: url(../img/icon/navbar.png);
                background-size: cover;
                width: 104%;
                height: 100px;
                display: block;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                border-bottom-left-radius: 20em 28em;
                border-bottom-right-radius: 20em 28em;
                margin-left: -2%;
                margin-right: 0;
                padding: 1rem 0;
                top: 0;
                left: 0;
                box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
                z-index: 100;
                }
                
                .navbar .container {
                    display: flex;
                    justify-content: space-between; 
                    align-items: center;
                    max-width: 100%;
                }
                
                .navbar .container a {
                    margin-left: 50px ;
                }
                
                .logo {
                    width: 200px ;
                    height: 75px ;
                    margin-top: -1.5%;
                    margin-left: 0;
                    margin-right: 5%;
                    object-fit: cover;
                    display: block;
                    transition: 0.3s;
                    padding-right: 10px;
                }
                
                .slogan {
                    text-decoration: none;
                    margin-top: auto;
                    margin-top: 0;
                    width: 3000px;
                    text-align: left;
                    margin-left: 0 auto;
                    margin-right: 0 auto;
                    padding-left: 20px;
                    letter-spacing: 3px;
                    color: white;
                    
                }
                
                .navbar .container .logo:hover {
                    filter:invert(100%) !important;
                    opacity: 0.7;
                }
                
                .navbar .masuk-daftar {
                    margin-top: 0;
                    margin-right: 5%;
                }
                
                .masuk {
                        background-color: #f2f2f2; 
                        color: #a6a6a6;
                        padding: 10px 20px;
                        text-decoration: none;
                        border-radius: 30px;
                        font-size: 1.1rem;
                        /*margin-right: 5%;*/
                        /*margin-top: -2%;*/
                        transition: 0.3s;
                }
                
                .masuk:hover {
                    filter:invert(100%) !important;
                    opacity: 0.7;
                }
                
                .daftar {
                    background-color: none;
                    border: 2px #f2f2f2 solid; 
                    color: #f2f2f2;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 30px;
                    font-size: 1.1rem;
                    /*margin-right: 20%;*/
                    /*margin-top: -4%;*/
                    transition: 0.3s;
                }
                
                .daftar:hover {
                filter:invert(100%) !important;
                opacity: 0.7;
                }

                .isi {
                    padding-top: 170px;
                    padding-bottom: 170px   ;
                    max-width: 100%;
                    background: linear-gradient(#d0ecf1, #cfdbd3);
                }

                .baris {
                    text-align: center;
                }

                .h1 {
                    font-size: 30px;
                    font-weight: 800;
                    letter-spacing: 3px;
                    padding-top: 5px;
                }

                .icon_bintang {
                    width: 25px;
                    height: 25px;
                }

                .h2 {
                    font-size: 30px;
                    font-weight: 300;
                    letter-spacing: 5px;
                    text-align: center;
                }

                .keren {
                    height: 60px;
                    width: auto;
                    vertical-align: middle;
                }

                .slider {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                }

                .card-list .card-item {
                    list-style: none;
                }

                .card-wrapper {
                    max-width: 1100px;
                    margin:0px 200px;
                    padding: 30px 25px 25px;
                    overflow: hidden;
                    background: none;
                }

                .card-list .card-item .card-link {
                    user-select: none;
                    display: block;
                    background: #fff;
                    padding: 20px;
                    border-radius: 20px;
                    text-decoration: none;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                    border: 2px solid transparent;
                    transition: 0.3s ease;
                }

                .card-list .card-item .card-link:hover {
                    border: 2px solid rgba(1, 20, 56, 0.4);
                    transform: scale(1.05);
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    cursor: grab;
                }

                .card-list .card-item .card-link:active {
                    cursor: grabbing;
                }

                .card-list .card-link .card-image {
                    width: 100%;
                    aspect-ratio: 3 / 4;
                    object-fit: cover;
                    border-radius: 15px;
                    border: 6px solid #fff;
                }

                .card-list .card-link .badge {
                    color: #5372f0;
                    padding: 4px 10px;
                    font-size: 0.9rem;
                    font-weight: 500;
                    margin: 8px 0 9x;
                    background: #dde4ff;
                    width: fit-content;
                    border-radius: 50px;
                }

                .card-list .card-link .card-title {
                    font-size: 1.1rem;
                    color: #000;
                    font-weight: 600;
                    padding-top: 5px;
                }

                .card-list .card-link .card-button {
                    height: 35px;
                    width: 35px;
                    color: #5372f0;
                    border-radius: 50%;
                    padding: 5px;
                    margin: 30px 0 5px;
                    background: none;
                    cursor: pointer;
                    border: 2px solid #5372f0;
                    transition: 0.4s ease;
                }

                .card-list .card-link .card-button:hover {
                    background: #5372f0;
                    color: #f2f2f2;
                }

                :root {
                    --swiper-theme-color: transparent !important;
                }

                .swiper-button-prev {
                    height: 100px !important;
                    width: 100px !important;
                    background-image: url(../img/icon/tombol_slide_kiri.svg) !important;
                    background-size: auto;
                    background-position: center;
                    background-repeat: no-repeat;
                }

                .swiper-button-next {
                    height: 100px !important;
                    width: 100px !important;
                    background-image: url(../img/icon/tombol_slide_kanan.svg) !important;
                    background-size: auto;
                    background-position: center;
                    background-repeat: no-repeat;
                }

                .swiper-slide-button:active{
                    animation: beat 0.1s alternate;
                    transform-origin: center;
                }

                @keyframes beat {
                    to {transform: scale(1.3);}
                }

                .swiper-slide-button {
                    margin: -100px 150px 150px !important;
                }


        </style>


    </head>

    <body>

        <!-- Navigation Bar --> <!------------------------------------------------------------------------------->

        <nav class="navbar">
            <div class="container d-flex ">

            <div class="col-md-3 d-flex">

            <!-- Logo -->

               <a href="..\halaman_utama\halaman_utama.html"> 
                 <img src="../img/icon/logo.svg" alt="logo" class="logo">
                </a>

            <!------------------------------------------------>

            </div>

            <div class="col-md-6 d-flex justify-content-center-start">

            <!-- Slogan -->

                <p class="slogan">
                    Jadi bintang itu pakai yang keren
                </p>

                <style>

                    @media (max-width: 792px) {
                            .slogan {
                                display: none !important;
                            }
                        }

                </style>

            </div>
            <!------------------------------------------------>

            <div class="col-md-3">

            <!-- Tombol Daftar & Masuk -->

                <div class="masuk-daftar"> 
                    <table>
                        <tr>
                            <td style="padding-left: 10%;"><a href="..\halaman_registrasi\registrasi.php" class="daftar" style="font-weight: bold;">DAFTAR</a></td>
                            <td><a href="..\halaman_masuk\halaman_masuk.php" class="masuk" style="font-weight: bold;">MASUK</a></td>
                        </tr>
                     </table>   

                </div>
            </div>
            
            </div>
             <!------------------------------------------------>
             
        </nav>

    <!-- Navigation Bar Selesai --> <!------------------------------------------------------------------------------->

        <!-- Isi Website -->

        <!-- Isi Website --> <!------------------------------------------------------------------------------->

            <div class="isi"> <div class="container">

                <!-- Teks Judul --> <!------------------------------------------------>  

                    <div class="baris">

                        <div class="h1">
                            Jadi Bin<span style="padding-right: 3px;">t</span><img src="..\img\icon\icon_bintang.svg" class="icon_bintang"><span style="padding-left: 4px;">ng</span></div>
                        </div>

                        </br>

                        <div class="h2">
                            Itu pakai yang<img src="..\img\icon\keren.svg" class="keren">
                        </div>

                        <br>
                        <br>

                    </div>

                <!-- Teks Judul Selesai --> <!------------------------------------------------>   

                <!-- Slider Foto --> <!------------------------------------------------>   

                    <div class="slider swiper">
                        <div class="card-wrapper">
                            <ul class="card-list swiper-wrapper">
                                <li class="card-item swiper-slide">
                                    <a href="registrasi.php" class="card-link">
                                        <img src="..\img\foto_kostum\kostum1.jpg" alt="foto_kostum" class="card-image">
                                        <p class="badge slide1">Kaedehara Kazuha</p>
                                        <h2 class="card-title">Cosplay</h2>
                                        <form action="registrasi.php">
                                        <button class="card-button material-symbols-outlined">add_shopping_cart</button>
                                        </form>
                                    </a>
                                </li>
                                <li class="card-item swiper-slide">
                                    <a href="#" class="card-link">
                                        <img src="..\img\foto_kostum\kostum2.jpg" alt="foto_kostum" class="card-image">
                                        <p class="badge slide2">Red Korean Dress</p>
                                        <h2 class="card-title">Casual</h2>
                                        <form action="registrasi.php">
                                        <button class="card-button material-symbols-outlined">add_shopping_cart</button>
                                        </form>
                                    </a>
                                </li>
                                <li class="card-item swiper-slide">
                                    <a href="#" class="card-link">
                                        <img src="..\img\foto_kostum\kostum3.jpg" alt="foto_kostum" class="card-image">
                                        <p class="badge slide3">Betawi Traditional Couple Costume</p>
                                        <h2 class="card-title">Baju Adat</h2>
                                        <form action="registrasi.php">
                                        <button class="card-button material-symbols-outlined">add_shopping_cart</button>
                                        </form>
                                    </a>
                                </li>
                                <li class="card-item swiper-slide">
                                    <a href="#" class="card-link">
                                        <img src="..\img\foto_kostum\kostum4.jpg" alt="foto_kostum" class="card-image">
                                        <p class="badge slide4">Kimenetsu No Yaiba - Gintama</p>
                                        <h2 class="card-title">Cosplay</h2>
                                        <form action="registrasi.php">
                                        <button class="card-button material-symbols-outlined">add_shopping_cart</button>
                                        </form>
                                    </a>
                                </li>
                                <li class="card-item swiper-slide">
                                    <a href="#" class="card-link">
                                        <img src="..\img\foto_kostum\kostum5.jpg" alt="foto_kostum" class="card-image">
                                        <p class="badge slide5">Spy x Family - Loid Forger</p>
                                        <h2 class="card-title">Cosplay</h2>
                                        <form action="registrasi.php">
                                        <button class="card-button material-symbols-outlined">add_shopping_cart</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>

                            <!-- <div class="swiper-pagination"></div> --> 
                            <div class="swiper-slide-button swiper-button-prev"></div>
                            <div class="swiper-slide-button swiper-button-next"></div>
                        </div>
                    </div>
                <!-- Slider Foto Selesai --> <!------------------------------------------------>   

            </div></div>
        <!-- Isi Website Selesai --> <!------------------------------------------------------------------------------->   

        <!-- Link to SwiperJS Java script (Slide Foto) -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Link to halaman_utama.js -->
        <script src="halaman_utama.js"></script>

        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>

            <div class="d-flex align-items-center mb-3">
                <img src="../img/icon/logo2.png" alt="logo">
            </div>

            <div class="row d-flex container-fluid">
                <div class="col-2 gap-3 d-flex mx-auto align-items-end justify-content-center py-2">
                    <a class="fs-3 text-white hover-overlay" href="https://www.youtube.com/@waju-sekopsekop"><ion-icon name="logo-youtube"></ion-icon></a>
                    <a class="fs-3 text-white hover-overlay" href="https://www.instagram.com/_waajuu?igsh=NHdpbmplaGc3c3l0"><ion-icon name="logo-instagram"></ion-icon></a>
                </div>

                <div class="col-8 row d-flex align-items-center justify-content-center">
                    <div class="m-auto d-flex align-items-center justify-content-center text-center lh-base text-break flex-wrap">
                        <p class="text_style text-center mx-2 p-0">MANPRO: HAMMIM TOHARI </p> 
                        <p class="text_style text-center mx-2 p-0">KETUA: NASRULLAH </p>
                        <p class="text_style text-center mx-2 p-0">BACK END: BUNGA CITRA LESTARI </p>
                        <p class="text_style text-center mx-2 p-0">BACK END: BIRGITA ANASTASYA </p>
                        <p class="text_style text-center mx-2 p-0">FRONT END: ELISABETH MARGARETA </p> 
                        <p class="text_style text-center mx-2 p-0">BACK END: ELSA VERONICA </p> 
                        <p class="text_style text-center mx-2 p-0">UI/UX: SALSABILA</p>
                    </div>
                </div>

                <div class="col-2 gap-3 d-flex mx-auto align-items-end justify-content-center py-3">

                    <a class="fs-3 text-white hover-overlay" href="halaman_keranjang"><ion-icon name="cart-outline"></ion-icon></a>
                    <a class="fs-3 text-white hover-overlay" href="halaman_pengaturan_user"><ion-icon name="person-sharp"></ion-icon></a>

                </div>
            </div>

            <hr class="mb-0" style="width: 100%; opacity: 80%; color: white;">
            <p class="copyright p-3 m-0">© PBL Tim WAJU Sekupang -  Politeknik Negeri Batam 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>