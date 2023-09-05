
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="">
<div class="pagetitle">
  <h1>Tambah Kurikulum</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
      <li class="breadcrumb-item active">Tambah Kurikulum</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Kurikulum</h5>
        <form action="https://softuni.id/admin/curriculum/insert" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="39d115a08cddbfb16eea38cc1fea5450" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Kurikulum</label>
                                                <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Nama Kurikulum" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Urutan</label>
                                                <input name="sequence" value="" type="number" class="form-control" placeholder="Ketikkan Urutan" required>
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


