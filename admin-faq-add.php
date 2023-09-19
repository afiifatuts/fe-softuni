
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-3 container">
    <h2>Tambah FAQ</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-faq.php">FAQ</a></li>
      <li class="breadcrumb-item active"> Tambah FAQ</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Tambah FAQ Baru</h2>
          <form  class="m-auto p-3" action="https://softuni.id/admin/faq/insert" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="5b8a3e09c9b6f004d380099a77f5d81f" />                                            <div class="form-group">
                                                <label class="add-course-label">Judul</label>
                                                <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan FAQ" required>
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
                                            <div class="widget-btn">
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                            </div>
                                        </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

