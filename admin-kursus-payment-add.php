
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>

<div class="pagetitle">
  <h1>Kursus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item "><a href="admin-kursus.php">Payment</a></li>
      <li class="breadcrumb-item "><a href="admin-kursus-edit.php">Edit Kursus</a></li>
      <li class="breadcrumb-item active">Tambah Payment</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
    <div class="card-body">
  <h5 class="card-title">Tambah Payment</h5>
  </div>
            
            <div class="col-lg-8 mb-5">

            <form action="https://softuni.id/admin/course/payment/insert/f2b65422-adca-11ed-9446-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="271417630e62084d8873198327db7a4d" />                                            <div class="form-group">
                                                <label class="add-course-label">Keterangan</label>
                                                <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Keterangan" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Nominal</label>
                                                <input name="nominal" value="" type="number" class="form-control" placeholder="Ketikkan Nominal">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Hari</label>
                                                <input name="day" value="2023-09-04" type="date" class="form-control" placeholder="Ketikkan Hari" required>
                                                <small class="text-danger"></small>
                                            </div>
                                         
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                           
                                        </form>
        </div>
        </div>
        </div>
</section>

</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


