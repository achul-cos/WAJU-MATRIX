<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk Toko</title>

    <link rel="stylesheet" href="halaman_masuk_admin.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Logo Tab -->
    <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            padding-top: 70px;
            caret-color: transparent;
            background-image: url(../img/foto/bg_baru.svg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        br {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .navbar {
            background-image: url(../img/icon/navbar.png);
            background-size: cover;
            height: 100px;
            border-bottom-left-radius: 20em 28em;
            border-bottom-right-radius: 20em 28em;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
            z-index: 100;
            position: fixed;
            width: 104%;
            margin-left: -2%;
            top: 0;
        }
        
        .logo {
            width: 200px;
            height: 75px;
            transition: 0.3s;
        }
        
        .logo:hover {
            filter: invert(100%) !important;
            opacity: 0.7;
        }
        
        .slogan {
            letter-spacing: 3px;
            color: white;
            margin-top: 10px;
        }
        
        .masuk {
            background-color: #f2f2f2;
            color: #a6a6a6;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: 0.3s;
            font-weight: bold;
        }
        
        .masuk:hover {
            filter: invert(100%) !important;
            opacity: 0.7;
        }
        
        .daftar {
            border: 2px #f2f2f2 solid;
            color: #f2f2f2;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: 0.3s;
            font-weight: bold;
        }
        
        .daftar:hover {
            filter: invert(100%) !important;
            opacity: 0.7;
        }
        
        /* Login Form Styling */
        .isi {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        
        .login-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        
        .login-header header {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }
        
        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #4285f4;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #3367d6;
        }
        
        .forgot {
            text-align: center;
            margin: 20px 0;
        }
        
        .forgot a {
            color: #4285f4;
        }
        
        .Input-submit {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        
        .Input-submit a {
            color: #4285f4;
        }
        
        @media (max-width: 792px) {
            .slogan {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container d-flex">
            <div class="col-md-3 d-flex">
                <!-- Logo -->
                <a href="../halaman_utama/halaman_utama.html"> 
                    <img src="../img/icon/logo_tokowaju.svg" alt="logo" class="logo">
                </a>
            </div>

            <div class="col-md-6 d-flex justify-content-start">
                <!-- Slogan -->
                <p class="slogan">
                    Jadi bintang itu pakai yang keren
                </p>
            </div>

            <div class="col-md-3">
                <!-- Buttons -->
                <div class="masuk-daftar d-flex justify-content-end"> 
                    <a href="../halaman_registrasi/registrasi.html" class="daftar me-2">DAFTAR</a>
                    <a href="halaman_masuk.html" class="masuk">MASUK</a>
                </div>
            </div>
        </div>
    </nav>>

    <!-- Main Content -->
    <div class="isi">
        <div class="login-box">
            <div class="login-header">
                <header>Masuk Toko</header>
                <br>
            </div>

            <form action="#" method="post">
                <div class="input-box">
                    <input type="text" name="nama_toko" id="nama_toko" class="input-field" placeholder="Nama Toko" autocomplete="off" required>
                </div>

                <div class="input-box"> 
                    <input type="password" name="kata_sandi" id="kata_sandi" class="input-field" placeholder="Kata Sandi" required>
                </div>

                <div class="Input-Submit">
                    <button type="submit" class="submit-btn">
                        Masuk
                    </button>
                </div>
            </form>

            <div class="forgot">
                <a href="../halaman_masuk/halaman_masuk.html" style="text-decoration: none;">Mau Nyewa Baju Aja?</a>
            </div>
            
            <div class="Input-submit">
                <p>Belum punya toko?</p>
                <a href="../halaman_daftar_admin/halaman_daftar_admin.html" style="text-decoration: none;">Buat Toko</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for username to lowercase -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var usernameInput = document.getElementById('nama_toko');

            usernameInput.addEventListener('input', function(e) {
                var start = this.selectionStart;
                var end = this.selectionEnd;

                // Convert text to lowercase
                this.value = this.value.toLowerCase();

                // Restore the selection range
                this.setSelectionRange(start, end);
            });
        });
    </script>
</body>
</html>