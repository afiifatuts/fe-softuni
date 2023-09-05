
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="">

<div class="pagetitle">
  <h1>Kurikulum</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Kurikulum</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blogs</h5>
            <a href="admin-kurikulum-add.php"> <button class="btn btn-primary mb-3" >Tambah</button></a> 

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td><img src="assets/curriculum_image/0a62546a-5b58-11ed-bef8-e82a44eb9daf.png" style="width:80px;"></td>
                    <td>Java Developer</td>
                    <td>
                    <a href="admin-kurikulum-edit.php"><button class="btn btn-warning"> Edit</button></a>
                    <a href="admin-kurikulum-banner.php"><button class="btn btn-danger"> Banner</button></a>
                    <a href="admin-kurikulum-topic.php"><button class="btn btn-success"> Topic</button></a>
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


