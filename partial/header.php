<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SoftUni</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="SoftUni Indonesia" name="keywords" />
    <meta content="SoftUni Indonesia" name="description" />

    <!-- Favicon -->
    <link href="assets/favicon.ico" rel="icon" />
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->

    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="./lib/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="./lib/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <link href="./lib/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="./lib/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="./lib/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="./lib/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="./lib/vendor/simple-datatables/style.css" rel="stylesheet" />


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./css/index.css" rel="stylesheet" />
    <link href="./css/dashboar.css" rel="stylesheet" />
    
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid topbar">
      <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center text-dark">
            <small><i class="fa fa-phone-alt mr-2"></i>0811 973 545</small>
            <small class="px-3">|</small>
            <small><i class="fa fa-envelope mr-2"></i> info@softuni.id</small>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a
              class="text-dark px-2"
              target="_blank"
              href="https://www.facebook.com/softuni.indonesia"
            >
              <i class="fab fa-facebook-f"></i>
            </a>
            <a
              class="text-dark px-2"
              target="_blank"
              href="https://www.tiktok.com/@softuni.indonesia"
            >
              <i class="fab fa-tiktok"></i>
            </a>
            <a
              class="text-dark px-2"
              target="_blank"
              href="https://www.linkedin.com/company/softuni-indonesia/"
            >
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a
              class="text-dark px-2"
              target="_blank"
              href="https://www.instagram.com/softuni.indonesia"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              class="text-dark pl-2"
              target="_blank"
              href="https://www.youtube.com/channel/UCWLOv3Amj-XuWi_TyjpvL0g"
            >
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
      <nav
        class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-lg-5"
      >
        <a href="index.php" class="navbar-brand ml-lg-3">
          <h3 class="m-0 text-uppercase text-logo" >
            <img src="assets/SoftUni-Logo.png" class="img-fluid h-logo" width="60%" />
          
          </h3>
        </a>
        <button
          type="button"
          class="navbar-toggler text-white"
          style="background-color: #fff;"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span  class="navbar-toggler-icon "></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between px-lg-3"
          id="navbarCollapse"
        >
          <div class="navbar-nav mx-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="kurikulum.php" class="nav-item nav-link">Kurikulum</a>
            <a href="kursus.php" class="nav-item nav-link">Kursus</a>
            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
                >For Corporate</a
              >
              <div class="dropdown-menu m-0">
                <a href="teknologi-informasi.php" class="dropdown-item"
                  >Teknologi Informasi</a
                >
                <a href="digital-marketing.php" class="dropdown-item"
                  >Digital Marketing</a
                >
                <a href="digital-creatif.php" class="dropdown-item"
                  >Digital Kreatif</a
                >
              </div>
            </div>
            <a href="tentang.php" class="nav-item nav-link">Tentang</a>
          </div>
           <!-- Jika belum login  -->
          <!-- <a href="daftar.php" class="btn btn-warning py-2 px-4 d-none d-lg-block"
            >Gabung</a > -->

            <!-- Jika user sudah login  -->
            <!-- <div class="navbar-nav mx-auto">
            <div class="nav-item dropdown">
              <a href="" class="nav-link  nav-profile d-flex align-items-center pe-0" data-toggle="dropdown"
                >
                <img
                src="./assets/profile/profile-img.jpeg"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block dropdown-toggle ps-2 text-white"
                >K. Anderson</span
              > </a
              >
              <div class="dropdown-menu m-0">
                <a href="./user-profile.php" class="dropdown-item"
                  >Akun Saya</a
                >
                <a href="./user-kursus.php" class="dropdown-item"
                  >Kursus Saya</a
                >
                <a href="./user-sertifikat.php" class="dropdown-item"
                  >Sertifikat Saya</a
                >
                <a href="keluar.php" class="dropdown-item"
                  ><i class="fas fa-sign-out-alt" style="margin-right:3px;"></i>Keluar</a
                >
              </div>
            </div>
            </div> -->
           
            <!-- End jika sudah login  -->
            
            <!-- Jika admin sudah login  -->
            <div class="navbar-nav mx-auto">
            <div class="nav-item dropdown">
              <a href="" class="nav-link  nav-profile d-flex align-items-center pe-0" data-toggle="dropdown"
                >
               
              <span class="d-none d-md-block dropdown-toggle ps-2 text-white"
                >Admin</span
              > </a
              >
              <div class="dropdown-menu m-0">
                <a href="./admin-dashboard.php" class="dropdown-item"
                  >Pengaturan Admin</a
                >
                <a href="keluar.php" class="dropdown-item"
                  >Keluar</a
                >
              </div>
            </div>
            </div>
           
            <!-- End jika sudah login  -->
        </div>
      </nav>
    </div>
    <!-- Navbar End -->