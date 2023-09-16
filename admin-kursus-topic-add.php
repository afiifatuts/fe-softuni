
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Tambah Topic</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
    <li class="breadcrumb-item"><a href="admin-kursus-topic.php">Topic Kursus</a></li>
      <li class="breadcrumb-item active"> Tambah Topic</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
      <div class="mx-5">
      <h5 >Tambah Topic</h5>
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
      <form class="ml-lg-5" action="https://softuni.id/admin/course/course-topic/insert/f2b65422-adca-11ed-9446-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="e1bc90b8c62f76c944b3ab63dab2f4ff" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Topic</label>
                                                <input name="topic" value="" type="text" class="form-control" placeholder="Ketikkan Judul Topic" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description"></textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Urutan</label>
                                                <input name="sequence" value="" type="number" class="form-control" placeholder="Ketikkan Urutan">
                                                <small class="text-danger"></small>
                                            </div>
                                       
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                        
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>



