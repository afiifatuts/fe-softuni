<?php include './partial/header.php'; ?>
<main id="main" class="main container-fluid py-5" style="min-height:80vh;">
    <div class="container-fluid">
      <div class="container">

<div class="pagetitle mb-4">
  <h1>Kursus Saya</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Kursus Saya</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section>
<div class="container">
  <div class="card my-3">
        <div class="row g-0">
          <div class="col-md-4 m-auto">
            <img src="assets/course_image/1c260dcf-09be-11ee-8734-005056470331.jpg" class="img-fluid rounded-start m-auto" alt="Course Img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href=""> Java Beginner</a></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <!-- link tele tidak muncul apabila belum bayar -->
                <p class="card-text">Link telegram :http:hjdifhshf </p>
                <!-- Status kursus : Buka, Tunda, Selesai, Berjalan -->
                <p>Status Kursus :  <button class="btn btn-primary">Buka</button> </p> 
                <!-- Status Pembayaran : lunas, belum dibayar, dicicil -->
                <p>Status Pembayaran:  <button class="btn btn-success">Lunas</button> </p> 
            </div>
          
          </div>
        </div>
      </div><!-- End Card with an image on left -->
 
</div>
</section>

        </div>
    </div>
</main><!-- End #main -->



<?php include './partial/footer.php'; ?>

