<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- Custom Font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    

    <!-- Logo Tab -->
    <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* CSS : Navagation Bar */
        .navbar {
            background-image: url(../img/icon/navbar.png);
            background-size: cover;
            border-bottom-left-radius: 20em 28em;
            border-bottom-right-radius: 20em 28em;
            height: 80px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
        }

        .navbar-brand {
            display: flex;
            justify-content: center;
            padding: 0px 0px 0% 0px !important;
            margin: 0px 5px 0px 0px !important;
            transition: 0.5s;
        }

        .navbar-brand:hover {
            filter:invert(100%) !important;
            opacity: 0.7;
        }

        .tombol_pencarian {
            display: block;
            width: 50px;
            height: auto;
            margin: 0 0 0 0;
            border: 1px solid rgba(14, 89, 129, 0.178);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05); 
            background: rgb(166, 214, 239) url(../img/icon/icon_cari.svg) no-repeat center / 25% !important;
            transition: 0.1s;
        }
   
        .tombol_pencarian:hover{
            border: none !important;
            filter:invert(20%) !important;
        }

        .tombol_pencarian:active{
            background-size: 50% !important;
        }

        .bar_pencarian {
            color: rgba(91, 91, 91, 0.57);            
            border: 1px solid rgba(14, 89, 129, 0.178);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05); 
            text-indent: 12px;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .bar_pencarian input:focus,
        .bar_pencarian input:hover {
            color: #00282b;
            border: 1.5px solid #00282b;
        }

        .base_keranjang, .keranjang {
            margin: auto;
            width: 30px;
            height: 30px;
            display: block;
            transition: 0.3s;
            justify-content: center;
            align-items: center;
        }
    
        .keranjang:hover {
            transform: scale(1.2);
        }

        .keranjang:active {
            animation: beat 0.3s alternate;
            transform-origin: center;
        } 
    
        @keyframes beat{
            to { transform: scale(1.4); }
        }

        .base_username {
            margin: auto;
            width: auto;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1.5px solid #f2f2f2;
            border-radius: 25px;
            color: #ffffff;
            font-family: "Poppins", sans-serif;
            letter-spacing: 1px;
            padding: 5px 12px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .tulisan {
            overflow: hidden;
            white-space: nowrap !important;
            text-overflow: ellipsis !important;
            max-width: calc(8vw) !important; 
            width: auto;
            text-align: center !important;
        }

        .base_username:hover {
            background-color: #f2f2f2;
            color: rgb(39, 74, 94);
        }
        
        .base_profil, .profil {
            margin: auto;
            width: auto;
            height: 30px;
            display: flex;
            z-index: 110;
            transition: 0.3s;
            padding-right: 30;
            right: 0;   
        }
        
        .profil:hover {
            transform: scale(1.2);
        }

        .profil:active {
            animation: beat 0.3s alternate;
            transform-origin: center;
        } 

        .container-fluid {
            max-width: 95% !important;
        }

        @media (max-width: 1245px) {
            .kolom_profil {
                display: none !important;
            }

            .kolom_logo,
            .kolom_pencarian {
                margin-left: 30px;
            }
        }

        @media (max-width: 992px) {
            .kolom_logo {
                margin: 0 0 0 50px;
            }
            .kolom_pencarian {
                margin: auto;
                max-width: 60vw;
            }
            .kolom_keranjang {
                display: none !important;
            }

            .kolom_nama {
                display: none !important;
            }
            .kolom_profil {
                display: flex !important;
            }
            .kolom_konten {
                width: auto !important;
                margin: 0 0 0 30px;
            }
        }

        @media (max-width: 741px) {
            .kolom_konten {
                display: none !important;
            }
            .kolom_logo {
                width: 20vw !important;
            }
            .kolom_pencarian {
                width: 60vw !important;
            }
        }

        @media (max-width: 600px) {
            .kolom_pencarian {
                display: none;
            }
            .kolom_logo {
                margin: 0 0 0 0 !important;
                width: 100% !important;
                align-items: center;
                justify-content: center;
                display: block !important;
            }
            .navbar-brand {
                align-items: center !important;
                justify-content: center !important;
            }
        }

        /* CSS : Isi Website */
        .isi{
            max-width: 100%;
            padding-top: -150px !important;
            margin: 0;
            background-color: #eaf2f6;
        }
    
        /* Banner */
        .hero {
            background: url('../img/foto/referensi.png') no-repeat center center/cover; 
            height: 520px;
            color: white;
            text-align: center;
            padding-top: 100px 0;
        }
        .hero h1 {
            font-size: 2rem;
            text-decoration: "Poppins", sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: white;
            letter-spacing: 1px;
            padding: 5px 12px;
            font-weight: 600;
            padding-top: 300px;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        .hero .btn {
            background-color: #ff6347;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
        }
        .hero .btn:hover {
            background-color: #e04e32;
        }

        /* Produk */
        .main-content {
            padding: 30px;
            background-color: #eaf2f6;
        }

        .header h1 {
            background: #dcf0ff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            font-family:"Poppins", sans-serif;
            color: white;
            padding: 5px;
            text-align: center;
            font-size: 25px;
            background-image: url(../img/foto/navbar.png);
        }

        .header h2 {
            background: #484848;
            color: white;
            font-family: "Poppins", sans-serif;
            text-align: center;
            font-size: 11px;
        }
            
        .main {
            padding: 20px;
        }

        .feature-box {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        
        .Judul {
            font-size: 15px;
            font-family: "Poppins", sans-serif;
            color: #484848;
            margin-left: 10px;
        }

        .feature {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);   
        }
            
        .feature img {
            display: flex;
            justify-content: center;
            align-items: center;
            width: auto;
            height: 200px;
            border-radius: 5px;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }
        
        .feature p {
            font-size: small;
            font-family: Arial, Helvetica, sans-serif;
        }
        .price {
            font-weight: bold;
            color: #e74c3c;
            font-size: x-small;
        }
            
        .feature button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
            border-radius: 20px;
            width: 150px;
            text-align: center;
        }
            
        button:hover {
            background-color: #45a049;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .footer .social-links {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }
        .footer .social-links li {
            margin: 0 10px;
        }
        .footer .social-links a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .footer .social-links a:hover {
            color: #ff6347
        }

        .base_profil:hover, .profil:hover {
            transform: scale(1.3);
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="col-2 kolom_logo">
                <a class="navbar-brand" href="halaman_beranda.html">
                    <img src="../img/icon/logo2.png" alt="logo" width="auto" height="auto">
                </a>
            </div>

            <div class="col-7 kolom_pencarian">
                <!-- Bar Pencarian -->
                <form class="d-flex" style="padding-left: 20px;" method="get" action="halaman_pencarian.html">
                    <input class="bar_pencarian form-control me-2" name="pencarian" type="search" placeholder="Hari ini mau keren yang mana?" aria-label="Search" required maxlength="60">
                    <button class="tombol_pencarian btn btn-outline-success" type="submit"></button>
                </form>
            </div>

            <div class="col-3 row d-flex justify-content-center kolom_konten">
                <div class="col-auto d-flex kolom_keranjang">
                    <!-- Logo Keranjang -->
                    <form action="halaman_keranjang.html" method="post" name="tombol_keranjang">
                        <button style="border: none; background: transparent;" class="base_keranjang" type="submit">
                            <img src="..\img\icon\icon_keranjang.svg" alt="keranjang" class="keranjang">
                        </button>
                    </form>
                </div>

                <div class="col-md-6 kolom_nama d-flex">
                    <!-- Nama Pengguna -->
                    <a href="list_sewa.html" class="base_username" id="username">
                        <div class="tulisan">
                            Username
                        </div>
                    </a>
                </div>

                <div class="col-auto d-flex kolom_profil">
                    <!-- Foto profil -->
                    <a href="list_sewa.html" class="base_profil">
                        <img src="../img/icon/profile.jpg" style="transform: scale(1.3); aspect-ratio: 1/1; object-fit: cover;" alt="photo_profil" class="profil rounded-circle border border-success border-opacity-25 shadow">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Isi Website -->
    <div class="isi" style="margin-top: -100px; padding-bottom: 100px;">
        <!-- Banner -->
        <section id="home" class="hero">
            <div class="container">
                <h1>Selamat Datang di Website Kami</h1>
                <a href="#produk" class="btn">Jelajahi</a>
            </div>
        </section>
  
        <!-- Produk Populer -->
        <header>
            <div class="header"><h1>Daftar Produk Penyewaan</h1></div>
            <div class="header"><h2 style="letter-spacing: 2px;">Jadi Bintang Itu Pakai Yang Keren</h2></div>
        </header>

        <main>
            <section id="produk" class="main-content">
                <div class="Judul"><h2>Produk Populer</h2></div>
                <div class="feature-box">
                    <div class="feature">
                        <img src="..\img\foto_kostum\produk1.jpeg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk A</h3>
                        <p>Deskripsi Produk A</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\wedding dress.1.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk B</h3>
                        <p>Deskripsi Produk B</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\baju adat.5.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk C</h3>
                        <p>Deskripsi Produk C</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\cosplay.3.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk D</h3>
                        <p>Deskripsi Produk D</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\wedding dress.2.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk E</h3>
                        <p>Deskripsi Produk E</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\baju adat.3.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk F</h3>
                        <p>Deskripsi Produk F</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>
                </div>
            </section>
  
            <!-- Produk Rekomendasi -->
            <section id="produk" class="main-content">
                <div class="Judul"><h2>Produk Rekomendasi</h2></div>
                <div class="feature-box">
                    <div class="feature">
                        <img src="..\img\foto_kostum\wedding dress.3.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk G</h3>
                        <p>Deskripsi Produk G</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\baju adat.1.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk H</h3>
                        <p>Deskripsi Produk H</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\cosplay.4.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk I</h3>
                        <p>Deskripsi Produk I</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\cosplay.2.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk J</h3>
                        <p>Deskripsi Produk J</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\baju adat.4.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk K</h3>
                        <p>Deskripsi Produk K</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>

                    <div class="feature">
                        <img src="..\img\foto_kostum\cosplay.1.jpg" alt="Produk 1" style="aspect-ratio: 1 / 1; object-fit: cover; width: 170px; height: 200px;">
                        <h3>Produk L</h3>
                        <p>Deskripsi Produk L</p>
                        <p class="price">Harga: Rp 100.000/hari</p>
                        <button>Sewa Sekarang</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Sewa Kostum Online</p>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
</body>
</html>