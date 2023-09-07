
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="">
<div class="pagetitle">
  <h1>Kursus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Kursus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kursus</h5>
            <a href="admin-kursus-add.php"> <button class="btn btn-primary mb-3" >Tambah Kursus</button></a> 

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kursus</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <th scope="row">1</th>
                    <td><img src="assets/img/card.jpg" style="width:150px;"></td>
                    <td>Bagaimana cara mendafar kursus di SoftUni Indonesia.
                      <p><i class="fas fa-wallet"></i> Rp 0</p>
                    </td>
                    <td>13-06-2024</td>
                    <td>
                    <p><a href="admin-kursus-edit.php"><button class="btn btn-warning">Edit</button></a>
                    <a href="admin-kursus-banner.php"><button class="btn btn-success">Banner</button></a></p> 
                    <p><a href="admin-kursus-topic.php"><button class="btn btn-warning">Topic</button></a>
                    
                    <a href="admin-kursus-url.php"><button class="btn btn-danger">Url</button></a></p> 
                    </td>
                  </tr>
              
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
</section>



</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


