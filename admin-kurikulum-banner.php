
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="">
<div class="pagetitle">
  <h1>Tambah Kurikulum</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
      <li class="breadcrumb-item active">Unggah Banner</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Unggah Banner</h5>
        <form action="https://softuni.id/admin/curriculum/8467df8b-5b41-11ed-bef8-e82a44eb9daf/upload" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="s0ftun1.1d" value="ee3746b57bf938ad625079899ebcba05" />                                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            
                                <!-- Apabila belum ada banner  -->

                                <div class="form-group">
                                       <label class="add-course-label">Pilih Banner</label>
                                       <div class="m-2">
                                       <img src="assets/profile/profile-img.jpeg" alt="Profile">
                                       </div>
                                       <div class="custom-file">
                                        
                                            <input name="banner" type="file" class="custom-file-input" id="customFile">
                                            <label  class="custom-file-label" for="customFile">Pilih Banner</label>
                                            </div>
                                                        <small class="text-danger"></small>
                             </div>
    
               <button type="submit" class="btn btn-primary">Simpan</button>
                                <!-- Apabila belum ada banner  -->

                                                <div class="form-group mt-5">
                                                                                                            <img src="https://softuni.id/curriculum_image/8467df8b-5b41-11ed-bef8-e82a44eb9daf.png" class="w-50">
                                                                                                    </div>

                                            
                                                        <a onclick="confirmPopUp('https://softuni.id/admin/curriculum/8467df8b-5b41-11ed-bef8-e82a44eb9daf/logo-delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                                                                                
                                        </form>
                            </div>
                            </div>
                            </div>
</section>

</div>


</main><!-- End #main -->





<?php include './partial/footer.php'; ?>
