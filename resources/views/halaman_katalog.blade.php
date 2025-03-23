<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['tombol_baju'];?></title>
    
    <!-- Menggunakan Bootstrap CSS dari file lokal -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Font "Poppins" -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Logo Tab -->

    <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">
</head>

<body>

    <!-- Internal CSS -->

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
            margin: 0 0 0 0; /* Menggabungkan margin */
            border: 1px solid rgba(14, 89, 129, 0.178);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05); 
            background: rgb(166, 214, 239) url(../img/icon/icon_cari.svg) no-repeat center / 25% !important; /* Menggabungkan properti background */
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
            width: 30px ;
            height: 30px ;
            display: block;
            transition: 0.3s;
            transition: 0.3s;
            justify-content: center; /* Mengatur konten secara horizontal ke tengah */
            align-items: center; /* Mengatur konten secara vertikal ke tengah */
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
            display: inline-flex; /* Menggunakan inline-flex untuk menyesuaikan lebar dengan konten */
            justify-content: center; /* Mengatur konten secara horizontal ke tengah */
            align-items: center; /* Mengatur konten secara vertikal ke tengah */
            border: 1.5px solid #f2f2f2;
            border-radius: 25px;
            color: #ffffff;
            font-family: "Poppins", sans-serif;
            letter-spacing: 1px;
            padding: 5px 12px; /* Padding untuk memberikan ruang di sekitar teks */
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s; /* Hanya perlu ditulis sekali */
        }

        .tulisan {
            overflow: hidden; /* Sembunyikan teks yang melampaui batas */
            white-space: nowrap !important; /* Mencegah teks membungkus ke baris baru */
            text-overflow: ellipsis !important; /* Tambahkan ellipsis (...) */
            max-width: calc(8vw) !important; 
            width: auto;
            text-align: center;
        }


        .base_username:hover {
            background-color: #f2f2f2;
            color: rgb(39, 74, 94);
        }
        
        .base_profil, .profil {
            margin: auto;
            width: auto ;
            height: 30px ;
            display: flex;
            z-index: 110;
            transition: 0.3s;
            padding-right: 30;
            transition: 0.3s;
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
                display: none;
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

        @media (max-width: 540.98px) {
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

        /* CSS : Navagation Bar Selesai */

        .isi{
            max-width: 100%;
            padding-top: 0px;
            margin: 0;
            overflow-x: hidden;
        }

        /* Isi Website (halaman katalog)*/

        .isi {
            padding-top: 50px;
        }

        /* Calender */

        .calendar table {
            width: 20%;
            margin-left: 25px;
            border-collapse: collapse;
        }

        .calendar th, .calendar td {
            padding: 10px;
            text-align: center;
            border: none;
        }
        .calendar .month{
            background-color: #437894;
            color: #FFFFFF;
        }
        .calendar .available {
            background-color: #7ED957;
        }
        .calendar .limited {
            background-color: #9FA8AC;
        }
        .calendar .full {
            background-color: #FF5757;
        }

        .status {
            display: flex;
            align-items: center;
            margin-top: 20px;
            margin-left: 25px;
        }
        .color-box {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .green {
            background-color: #7ED957;
        }
        .gray {
            background-color: #9FA8AC;
        }
        .red {
            background-color: #FF5757;
        }

        /* Gaya untuk produk */

        .product-image {
            width: 400px;
            height: auto;
            border-radius: 10px;
            border-style: solid;
        }
        .product-info {
            background-color: #deebee;
            border-radius: 10px;
            padding: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-price {
            background-color: #1E3A8A;
            color: #FFFFFF;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        .product-details .like {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #e74c3c;
            margin-top: 10px;
        }
        .product-details .like i {
            font-size: 18px;
            color: #e74c3c;
        }
        .product-details .like span {
            margin-left: 5px;
            font-size: 14px;
            color: #ff0000;
        }
        .btn-custom {
            background-color: #5BC0BE;
            color: #FFFFFF;
            border: none;
            padding: 0.25rem 1rem;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
        }
        .btn-custom:hover {
            background-color: #3A9A9F;
        }

        /* Gaya untuk form */
        .form-label {
            font-size: 1rem;
            font-weight: bold;
        }
        .form-control, .form-select {
            font-size: 1rem;
            padding: 0.25rem;
        }
        .fa-heart {
            font-size: 1.25rem;
            color: #E63946;
        }
        .like-count {
            font-size: 1rem;
            font-weight: bold;
            margin-left: 0.25rem;
        }
        
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #f2f2f2;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk tombol close (X) di bawah teks */
        .close {
            position: absolute;
            bottom: -30px; 
            left: 50%;
            transform: translateX(-50%); 
            font-size: 40px;
            color: white; 
            background-color: black; 
            width: 40px;
            height: 40px; 
            border-radius: 50%; 
            display: flex;
            justify-content: center; 
            align-items: center; 
            cursor: pointer;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Tentang */

        .about {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
            }
            .about h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            }
            .about p {
            margin: 10px 0;
            font-size: 1.1rem;
            }
            
        /* Footer */
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            width: 100%;
            bottom: 0;
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
        
    </style>

    <!-- Navagation Bar -->

    <nav class="navbar navbar-expand-lg">

    <div class="container-fluid">

    <div class="col-2 kolom_logo">
        <a class="navbar-brand" href="../halaman_beranda/halaman_beranda.php">
            <img src="../img/icon/logo2.png" alt="logo" width="auto" height="auto">
        </a>
    </div>

    <div class="col-7 kolom_pencarian">
        <!-- Bar Pencarian -->
        <form class="d-flex" style="padding-left: 20px;" action="../halaman_pencarian/halaman_pencarian.php" method="get">
            <input class="bar_pencarian form-control me-2" name="pencarian" value="<?php if(isset($_GET['pencarian'])){echo $_GET['pencarian'];} ?>" type="search" placeholder="Hari ini mau keren yang mana?" aria-label="Search" required maxlength="60" oninvalid="this.setCustomValidity('Isi dong, mau nyari apa kalau kosong.')" oninput="setCustomValidity('')">
            <button class="tombol_pencarian btn btn-outline-success" type="submit"></button>
        </form>
    </div>

    <div class="col-3 row d-flex justify-content-center kolom_konten">

        <div class="col-auto d-flex kolom_keranjang">
            <!-- Logo Keranjang -->

            <td>
                <form action="../halaman_keranjang/halaman_keranjang.php" method="post" name="tombol_keranjang">
                    <button style="border: none; background: transparent;" class="base_keranjang" type="submit">
                        <img src="..\img\icon\icon_keranjang.svg" alt="keranjang" class="keranjang">
                    </button>
                </form>
            </td>

        </div>

        <div class="col-md-6 kolom_nama d-flex">
            <!-- Nama Pengguna -->

            <td>
                <a href="../halaman_list/list_sewa.php" class="base_username" id="username">
                    <div class="tulisan">
                        <?php echo $_SESSION['nama_pengguna']; ?>
                    </div>
                </a>
            </td>

        </div>

        <div class="col-auto d-flex kolom_profil">
            <!-- Foto profil -->

            <td>
            <a href="../halaman_list/list_sewa.php" class="base_profil">
                <img src="<?php if($_SESSION['foto_pengguna'] == NULL) {echo "..\img\icon\profile.jpg";} else{echo $_SESSION['foto_pengguna'];}?>" style="transform: scale(1.3); aspect-ratio: 1/1; object-fit: cover;" alt="photo_profil" class="profil rounded-circle border border-success border-opacity-25 shadow">
                </a>

            <style>
              .base_profil:hover, .profil:hover {
                transform: scale(1.3);
                }
            </style>
            </td>
        </div>

    </div>

    </div>

    </nav>

    <!-- Navagation Bar Selesai -->

    <!-- Isi Website --> <!-------------------------------------------------------------------------------->

    <div class="isi" style="padding-bottom: 120px;">

        <div class="container mt-3">

            <!-- Informasi Produk -->
            <div class="row">

                <div class="col-md-5">

                        <div class="card shadow-lg p-3 mb-5 bg-body rounded-3 d-flex justify-content-center">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <img alt="foto kostum" class="rounded-3" src="foto_baju" style="
                                aspect-ration: 4/4;
                                height: 500px;
                                width: 500px;
                                object-fit: cover;
                                ">
                            </div>

                        </div>

                </div>
                
                <div class="col-md-1">


                </div>

                <div class="col-md-6">

                    <div class="product-info" style="padding:25px 25px 30px 25px;">

                    <h3 class="p-1 font-weight-bold"><?= $produk['nama_baju']; ?></h3>

                        <div class="product-info" style="padding: 25px;">

                            <!-- Ikon suka ditempatkan di atas harga -->
                            <div class="product-details" style="padding: 5px 0 15px 0;">
                                
                                <div class="">
                                    <table>
                                        <tr style="padding-bottom: 10px">
                                            <td style="padding-right:10px;">Tersewa <span style="font-weight: 750;"></span> Kali</td>
                                            <td>|</td>
                                            <td style="padding-left:10px;">Rating <span style="font-weight: 750;"></span> <i class="fa-solid fa-star" style="color: #FFD43B;"></i></td>
                                        </tr>
                                    </table>
                                </div>

                            </div> 

                            <div class="product-price">
                                RP. /hari
                            </div>
                            
                            <form method="get" name="masukkan_keranjang" action="">

                                <div class="mb-2 py-1">
                                    <label class="form-label" for="size">Pilih Ukuran</label><br>

                                    <table>
                                    <tr>

                                        <td class="px-1" style="display: none;">
                                            <form method="get" action="../halaman_katalog/halaman_katalog_s.php">
                                                <input type="hidden" name="tombol_baju" value="<?= $produk['nama_baju']; ?>"> 
                                                <button type="submit" class="btn btn-outline-primary">S</button>
                                            </form>
                                        </td>

                                        <td class="px-1">
                                            <form method="get" action="../halaman_katalog/halaman_katalog_s.php">
                                                <input type="hidden" name="tombol_baju" value="<?= $produk['nama_baju']; ?>"> 
                                                <button type="submit" class="btn btn-outline-primary">S</button>
                                            </form>
                                        </td>
                                        
                                        <td class="px-1">
                                            <form method="get" action="../halaman_katalog/halaman_katalog_m.php">
                                                <input type="hidden" name="tombol_baju" value="<?= $produk['nama_baju']; ?>"> 
                                                <button type="submit" class="btn btn-outline-primary">M</button>
                                            </form>
                                        </td>   
                                        
                                        <td class="px-1">
                                            <form method="get" action="../halaman_katalog/halaman_katalog_l.php">
                                                <input type="hidden" name="tombol_baju" value="<?= $produk['nama_baju']; ?>"> 
                                                <button type="submit" class="btn btn-outline-primary">L</button>
                                            </form>
                                        </td>

                                    </tr>
                                    </table>
                                
                                </div>
     
                                <div class="mb-2" style="padding-bottom: 20px;">
                                    <p class="form-label">Jumlah Baju Yang Tersedia (Sesuai Ukuran)</p>
                                    <div class="p-2 h5 font-weight-bold bg-info text-white">
                                        Pilih Ukuran
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-primary" id="addToCartButton" type="submit" disabled>TAMBAHKAN KE KERANJANG</button>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $produk['kontak_pemilik']; ?>&text=Halo WAJU Lovers! Saya Ingin Bertanya." target="_blank" class="button btn btn-custom">Chat Pemilik</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">

            <div class="col-md">

                <div class="card shadow p-3 mb-5 bg-body rounded-3">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-auto px-3"><a href="">

                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2 border border-dark shadow-sm border-success border-opacity-50 " alt="foto_pemilik" 
                                style="
                                    max-width: 100px;
                                    min-height: 100px;
                                    object-fit: cover;
                                    aspect-ratio: 1 / 1;"
                                >

                            </div></a>

                            <div class="col-md-auto px-2 d-flex">

                                <div class="vr"></div>

                            </div>

                            <div class="col px-2">

                                <a type="button" class="btn btn-primary p-1 px-2" href="#"><p class="card-title font-weight-bold"><?= $produk['pemilik_baju']; ?></p></a>

                                <div class="d-flex flex-row bd-highlight mt-3">

                                    <div class="vr" style="width: 3px; rounded"></div>

                                    <p class="card-text px-2 text-truncate" style="max-width: 80vh;"><?= $produk['deskripsi_toko']; ?></p>

                                </div>

                                <div class="d-flex flex-row bd-highlight mt-3">

                                    <i class="fa-solid fa-location-dot"></i>

                                    <p class="card-text px-2 text-truncate" style="max-width: 80vh;"><?= $produk['alamat_toko']; ?></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </br>

        <div class="container mt-3">

            <div class="row">

                <div class="col-md-3">

                    <div class="calendar">
                        
                    </div>
                        
                    <div class="status">
                        <div class="color-box green"></div>
                        <div>Tersedia</div>
                    </div>
                    <div class="status">
                        <div class="color-box gray"></div>
                        <div>Stok Sedikit</div>
                    </div>
                    <div class="status">
                        <div class="color-box red"></div>
                        <div>Penuh</div>
                    </div>
                </div>

                <div class="col-md-9">
                <div class="card shadow-md p-3 mb-5 bg-body rounded-3">

                    <div class="card-body">

                        <div class="p-3 h5 font-weight-bold bg-info text-white">

                            Deskripsi

                        </div>

                        <br>

                        <div class="deskripsi">

                            <p class="text-break">
                            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus et ipsum eu ultrices. Vivamus at mauris eros. Mauris vitae suscipit augue. Aenean ac mollis ante. Nullam vitae eros gravida diam interdum finibus eu ac orci. Proin luctus tellus nunc, vitae scelerisque dolor venenatis eu. Phasellus convallis a ipsum sit amet luctus. Integer eu placerat urna. Mauris ut euismod arcu. Aliquam laoreet nulla sem, at auctor ligula dapibus et. Suspendisse ultrices leo at porttitor auctor. Nam quis dolor ac tellus viverra mollis nec quis dolor.-->
                            <?php echo nl2br(htmlspecialchars($produk['deskripsi_baju'])); ?>
                            </p>

                        </div>

                    </div>

                </div>

                </div>

            </div>

        </div>

        <!-- Modal (Popup) -->
        <div id="cartModal" class="modal">
            <div class="modal-content">
                <span class="checkmark">&#10003;</span> <!-- Tanda centang -->
                <p>Produk berhasil di tambahkan ke keranjang!</p>
                <span class="close">&times;</span> <!-- Tombol close (X) -->
            </div>
        </div>

    </div>

    <link rel="stylesheet" href="..\footer\footer.css">

    <!-- Bootstrap JS dari file lokal -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Java script --> <!-------------------------------------------------------------------------------->

        <script src="https://kit.fontawesome.com/16c1f9d94e.js" crossorigin="anonymous"></script> 

        <script>

        // Fungsi untuk membuka dan menutup modal
        var modal = document.getElementById("cartModal");
        var tombolTambahKeranjang = document.getElementById("addToCartButton");
        var tombolTutup = document.getElementsByClassName("close")[0];

        // Menampilkan modal setelah klik tombol tambah ke keranjang
        tombolTambahKeranjang.onclick = function() {
        modal.style.display = "block";
        }

        // Ketika pengguna mengklik tombol "Tutup" (X), sembunyikan modal
        tombolTutup.onclick = function() {
        modal.style.display = "none";
        }

        // Ketika pengguna mengklik di luar modal, tutup modal
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script>

</body>
</html>