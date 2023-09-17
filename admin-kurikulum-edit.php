
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Tambah Kurikulum</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
      <li class="breadcrumb-item active"> Edit Kurikulum</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
    
    <h5 class="mx-2">Edit Kurikulum</h5>
        <form action="https://softuni.id/admin/curriculum/8467df8b-5b41-11ed-bef8-e82a44eb9daf" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="b30a35a9bb6a434f68d12443d8aad27a" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Kurikulum</label>
                                                <input name="title" value="Java Web Developer" type="text" class="form-control" placeholder="Ketikkan Nama Kurikulum" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Urutan</label>
                                                <input name="sequence" value="1" type="number" class="form-control" placeholder="Ketikkan Urutan" required>
                                                <small class="text-danger"></small>
                                            </div>
                                     
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/curriculum/8467df8b-5b41-11ed-bef8-e82a44eb9daf/delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                          
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>





