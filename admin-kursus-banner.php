
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Tambah Banner</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active"> Tambah Banner</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
      <div class="mx-4">
      <h5 >Tambah Banner</h5>
              <table class="table table-nowrap ">
                                <tbody>
                                    <tr>
                                        <td width="20%">
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p>Judul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="text-black">Javascript Basic</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
      </div>
      <form class="mx-3" action="https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331/upload" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="s0ftun1.1d" value="e13bebdb55bdac2a3d05b11af2c51a62" />                                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            

                                 

                                                <div class="form-group">
                                       <h5 class="my-3">Pilih Banner Kursus</h5>
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
               <a
      onclick="confirmPopUp('https://softuni.id/admin/curriculum/topic/5e099680-5b45-11ed-bef8-e82a44eb9daf/8467df8b-5b41-11ed-bef8-e82a44eb9daf/delete')"
      type="submit"
      class="btn btn-outline-secondary"
      ><i class="fas fa-trash"></i> Hapus</a
    >
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>



