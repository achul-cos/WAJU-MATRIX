<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>

  <!-- Custom Font "Poppins" -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">    

  <!-- Bootstrap CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  <!-- Penyertaan skrip Bootstrap -->
  <script src="./Product Page_files/popper.min.js.download"></script>
  <script src="./Product Page_files/bootstrap.min.js.download"></script>
  
  <!-- Logo Tab -->
  <link rel="icon" type="image/x-icon" href="../img/icon/logo_atas.svg">
  
  <!-- Custom CSS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
      
    /* Gaya background halaman */
    body {
      background: rgb(217,233,233);
      background: radial-gradient(circle, rgba(217,233,233,1) 3%, rgba(224,237,227,1) 100%);
    }

    /* CSS : Navagation Bar */
    .navbar {
      background-image: url(../img/icon/navbar.png);
      background-size: cover;
      border-bottom-left-radius: 20em 28em;
      border-bottom-right-radius: 20em 28em;
      height: 80px;
      box-shadow: 0 0 100px rgba(0, 0, 0, 0.325);
      z-index: 1000;
    }

    /* Styling untuk brand navbar */
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

    /* Tombol Pencarian */
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

    /* Gaya untuk tombol keranjang */
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

    /* Gaya untuk nama pengguna */
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
      text-align: center;
    }

    .base_username:hover {
      background-color: #f2f2f2;
      color: rgb(39, 74, 94);
      text-decoration :none;
    }
      
    /* Profil dan pengaturan gaya flex */
    .base_profil, .profil {
      margin: auto;
      width: auto;
      height: 30px;
      display: flex;
      z-index: 110;
      transition: 0.3s;
      padding-right: 30;
      transition: 0.3s;
      right: 0;   
    }

    .profil:active {
      animation: beat 0.3s alternate;
      transform-origin: center;
    } 

    /* Container dan pengaturan lebar */
    .container-fluid {
      max-width: 95% !important;
    }

    /* Responsif untuk ukuran layar */
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
      
    .sidebar {
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
      background-color: #6be6ff;
      padding-top: 70px;
      border-right: 1px solid #ddd;
      font-family: 'poppins';
      z-index: 10;
    }
    
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    
    .sidebar ul li a {
      display: block;
      padding: 10px 20px;
      color: #333;
      text-decoration: none;
    }
    
    .sidebar ul li a:hover, .sidebar ul li a.active {
      background-color: #2bc1c1;
      color: #fff;
    }