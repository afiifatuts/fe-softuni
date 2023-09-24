
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<style>
/* Custom CSS for responsiveness */
@media (max-width: 768px) {
  /* Adjust the table layout for smaller screens */
  #datatable {
    width: 100%;
  }
  #datatable th,
  #datatable td {
    display: block;
    width: 100%;
    box-sizing: border-box;
  }
  #datatable th {
    text-align: left;
  }
  #datatable tbody td:before {
    content: attr(data-th);
    font-weight: bold;
  }
}



</style>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3 ">
    <h2>Kursus</h2>
    <nav>
    <ol class="breadcrumb">
     <li class="breadcrumb-item active"> Kursus</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
<!-- Kursus card -->
<section class="container dashboard mb-5">
  <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
      <div class="card-body">
        <a href="admin-kursus-add.php"><button class="btn btn-primary mb-3">Tambah Kursus</button></a>

        <!-- Datatable -->
        <div class="table-responsive">
          <table id="datatable" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Kursus</th>
                <th>Harga</th>
                <th>Tanggal Mulai</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="assets/img/card.jpg" style="max-width: 150px;" class="img-fluid"></td>
                <td>Java Beginner</td>
                <td>Rp 0</td>
                <td>10/10/21</td>
                <td>
                  <a href="admin-kursus-edit.php" class="btn btn-outline-primary">Edit</a>
                  <a href="admin-kursus-banner.php" class="btn btn-outline-secondary">Banner</a>
                  <a href="admin-kursus-topic.php" class="btn btn-outline-success">Topic</a>
                  <a href="admin-kursus-url.php" class="btn btn-outline-warning">Url</a>
                </td>
            </tbody>
          </table>
        </div>
        <!-- End Datatable -->
      </div>
    </div>
  </div>
</section>


  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>


<?php include './partial/footer.php'; ?>

