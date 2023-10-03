<?php include 'partial/header.php'; ?>
<style>
    .skpi-header{
      padding: 0;
        background:#FFC309;
        display: flex;
    }
    @media (max-width: 850px) {
      .skpi-header {
        flex-direction:column;
    }
    .skpi-text{
      padding: 1rem !important;
    }
    .skpi-text h1{
      font-size:2rem !important;
    }

}
    .skpi-text{
      flex:3;
      display: flex;
      flex-direction:column;
      justify-content:center;
      padding-left: 10rem;
    }
    .skpi-text h1{
      font-family: 'Monserrat', sans-serif ;
      font-weight:bold;
      font-size:5rem !important ;
    }
    .skpi-text h4{
      max-width: 500px;
      line-height: 1.5;
      letter-spacing: 1px;
    }

    .skpi-img{
      flex:2;
      object-fit: fill;
      display: flex;
      justify-content:center;
    }
    /* .skpi-img img{
      width: 200px;
    height: 300px;
    object-fit: fill;
    } */
    .skpi-program-title{
      line-height: 1.5;
      letter-spacing: 1.5px;
    }

    .skpi-program {
      min-height:70vh ;
    }

    .skpi-program-img{
      width:300px;
      height:300px;
    }
    

    @media (min-width: 850px) {
      .skpi-program-img{
      width:600px;
      height:300px;
    }
    .skpi-program-title{
      display: flex;
      justify-content:center;
    }
}

.skpi-why{
  background:#FFC309;
}
    
 
</style>
<!-- Header Start -->
<div class="skpi-header"  style="margin-bottom: 90px">
    <div class="skpi-text text-left ">
      
    <h1 class="text-white">SKPI <br/> PROGRAM</h1>
    <div class="d-inline-flex mb-5">
      <h4 class="text-dark text-uppercase">Pendamping Ijazah Dan Sertifikat Kompetensi Internasional untuk Mahasiswa Kampus Anda</h4>
    </div>
    <div class="mb-5">
        <a href="#contactSkpi" class="btn btn-light btn-lg font-weight-bold py-3 px-5">HUBUNGI</a >
    </div>
    </div>
    <img class="skpi-img img-fluid" src="assets/skpi_image/skpi2.jpeg" alt="Skpi Program">
</div>
    <!-- Header End -->

<!-- SKPI Program Start -->
<div class="skpi-program bg-white  pb-5" >
    <div class="container p-2">
      <div class="skpi-program-title">
      <h1 class="col-lg-8 text-center  mb-5">Pilihan Program Terbaik untuk  Perguruan Tinggi Terbaik</h1>
      </div>
      <div class="row gx-5 text-center">
      <div class="col-lg-4 col-md-6 mb-2">
        <img class="img-fluid mb-3 skpi-program-img" src="assets/skpi_image/program1.png" alt="program1">
        <h2>Teknologi Informasi
Program</h2>
      </div>
      <div class="col-lg-4 col-md-6 mb-2">
        <img class="img-fluid mb-3 skpi-program-img" src="assets/skpi_image/programm.png" alt="program2">
        <h2>Digital Marketing
Program</h2>
      </div>
      <div class="col-lg-4 col-md-6 mb-2">
        <img class="img-fluid mb-3 skpi-program-img" src="assets/skpi_image/program3.png" alt="program3">
        <h2>Digital Kreatif
Program</h2>
      </div>
      </div>
    </div>
</div>
    <!-- SKPI Program End -->

    <!-- Kenapa Program SKPI Start -->
    <div class="container-fluid skpi-why"  data-aos="fade-up">
      <div class="container">
        <div class="row" >
        <div class="col-lg-5" style="min-height: 500px">
            <div class="h-100">
              <img
                class=" w-100 h-95 mt-5"
                src="assets/skpi_image/why-skpi.png"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7 my-5 pt-5 pb-lg-5"> 
            <div class="section-title  mb-3 mt-lg-3 mt-lg-3">
              <h1 class="display-4">Kenapa Program SKPI Software 
University Indonesia</h1>
            </div>
            <div class="d-flex align-items-center">
              <div class="btn-icon mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Terafiliasi dengan jaringan SoftUni Internasional <a href="https://softuni.bg/" target="_blank">softuni.bg</a></p>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="btn-icon  mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Standarisasi kurikulum Internasional</p>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="btn-icon  mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Bimbingan langsung secara online / offline</p>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="btn-icon  mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Sistem ujian khusus langsung dari pusat Software University</p>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="btn-icon  mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Group diskusi 24 jam bersama mentor</p>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="btn-icon  mr-lg-4">
              <i class="fas fa-2x fa-check-circle text-dark"></i>
              </div>
              <div class="mt-2">
                <p class="text-dark">Dokumentasi untuk setiap live sesi</p>
              </div>
            </div>

          </div>
        
        </div>
      </div>
    </div>
    <!-- Kenapa Program SKPI End -->


<!-- SKPI Program Start -->
<div class="skpi-program bg-white  p-5" >
    <div class="container p-5">
      <div class="skpi-program-title">
      <h1 class="col-lg-8 text-center  mb-5">Kampus yang sudah bekerjasama</h1>
      </div>
      <div class="row gx-5 text-center">
      <div class="col-lg-4 col-md-6 m-auto">
        <img class="img-fluid mb-3 " src="assets/skpi_image/skpi-kampus.png" alt="">
      </div>
      </div>
    </div>
</div>
    <!-- SKPI Program End -->

<!-- START SKPI Program  -->
                
<!-- Contact Start -->
<div id="contactSkpi" class="container-fluid py-5 mb-5">
  <div class="container p-5">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="skpi-program-title">
          <h1 class="col-lg-8 text-center  mb-5">
            Segera Daftarkan Mahasiswa Anda dan Bersama meraih sukses!
          </h1>
        </div>
        <div class="">
          <form class=" m-auto ">
            <div class="row">
              <div class="col-6 form-group">
                <input
                  type="text"
                  class="form-control border-top-0 border-right-0 border-left-0 p-0"
                  placeholder="Nama"
                  required="required"
                />
              </div>
              <div class="col-6 form-group">
                <input
                  type="email"
                  class="form-control border-top-0 border-right-0 border-left-0 p-0"
                  placeholder="Email"
                  required="required"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control border-top-0 border-right-0 border-left-0 p-0"
                placeholder="Telepon"
                required="required"
              />
            </div>
            <div class="form-group">
              <textarea
                class="form-control border-top-0 border-right-0 border-left-0 p-0"
                rows="5"
                placeholder="Pesan"
                required="required"
              ></textarea>
            </div>
            <div>
              <button class="btn btn-warning py-3 px-5" type="submit">
                Kirim
              </button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php include 'partial/footer.php'; ?>
