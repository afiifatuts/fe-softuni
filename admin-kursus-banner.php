
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="col-lg-8">
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active">Tambah Kursus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
    <h5 class="card-title">Judul Kursus</h5>
    <p class="card-text">Java Beginner</p>
    <form action="https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331/upload" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="s0ftun1.1d" value="e13bebdb55bdac2a3d05b11af2c51a62" />                                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            

                                 

                                                <div class="form-group">
                                       <label class="add-course-label">Pilih Banner Kursus</label>
                                       <div class="m-2">
                                       <img src="assets/profile/profile-img.jpeg" alt="Profile">
                                       </div>
                                       <div class="custom-file">
                                        
                                            <input name="banner" type="file" class="custom-file-input" id="customFile">
                                            <label  class="custom-file-label" for="customFile">Pilih Banner Kursus</label>
                                            </div>
                                                        <small class="text-danger"></small>
                             </div>
    
               <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                            </div>
                            </div>

</div>

</main><!-- End #main -->





<?php include './partial/footer.php'; ?>

