
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
      <li class="breadcrumb-item active">Edit Payment</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
    <div class="card-body">
  <h5 class="card-title">Edit Payment</h5>
  </div>
            
            <div class="col-lg-8 mb-5">

            <form action="https://softuni.id/admin/course/payment/34c8aa0f-4af2-11ee-89c8-005056470331/f2b65422-adca-11ed-9446-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="87ec450ac3e2beb1e67e5b6b6923e2de" />                                            <div class="form-group">
                                                <label class="add-course-label">Keterangan</label>
                                                <input name="title" value="test" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Nominal</label>
                                                <input name="nominal" value="10000" type="number" class="form-control" placeholder="Ketikkan Nominal">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Hari</label>
                                                <input name="day" value="2023" type="date" class="form-control" placeholder="Ketikkan Hari" required>
                                                <small class="text-danger"></small>
                                            </div>
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/course/payment/34c8aa0f-4af2-11ee-89c8-005056470331/f2b65422-adca-11ed-9446-005056470331/delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                         
                                        </form>
        </div>
        </div>
        </div>
</section>

</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


