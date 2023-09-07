
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="col-md-12">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Blogs</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blogs</h5>
            <a href="admin-blog-add.php"> <button class="btn btn-primary mb-3" >Tambah</button></a> 

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <th scope="row">1</th>
                    <td><img src="assets/img/card.jpg" style="width:150px;"></td>
                    <td>Bagaimana cara mendafar kursus di SoftUni Indonesia.</td>
                    <td>
                    <a href="admin-blog-edit.php"><button class="btn btn-warning"> Edit</button></a>
                        <button class="btn btn-danger">Delete</button>
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


