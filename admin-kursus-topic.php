
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div >
<div class="pagetitle">
  <h1>Topic</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item "><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active">Topic</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard ">
  <div class="row ">
  <div class="card ml-3 " style="min-width:900px">
            <div class="card-body">
            <h5 class="card-title">Judul Kursus</h5>
    <p class="card-text">Java Beginner</p>
            <a href="admin-kursus-topic-add.php"> <button class="btn btn-primary mb-3" >Tambah Topic</button></a> 

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                  
                    <td>Bagaimana cara mendafar kursus di SoftUni Indonesia.
                     </td>
                    <td>
                    <a href="admin-kursus-topic-edit.php"><button class="btn btn-warning">Edit</button>
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


