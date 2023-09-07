
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Event</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event</h5>
            <a href="admin-event-add.php"> <button class="btn btn-primary mb-3" >Tambah Event</button></a> 

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <th scope="row">1</th>
                    <td><img src="assets/img/card.jpg" style="width:150px;"></td>
                    <td>Judul Acara
                    </td>
                    <td>13-06-2024</td>
                    <td>
                   <a href="admin-event-edit.php"><button class="btn btn-warning">Edit</button></a>
                     <a href="event-hapus.php"><button class="btn btn-danger">Hapus</button></a>

                    
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


