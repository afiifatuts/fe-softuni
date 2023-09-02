
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item ">Event</li>
      <li class="breadcrumb-item active">Tambah Event</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
  <h5 class="card-title">Tambah Event</h5>
            
            <div class="col-lg-8 m-auto mb-5">

            <form action="" method="POST">
                                            <input type="hidden" name="" value="" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Event</label>
                                                <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Nama Event" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Poster Event</label>
                                                <input name="poster" value="" type="file" class="form-control" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Thumbnail</label>
                                                <input name="thumbnail" value="" type="text" class="form-control" placeholder="Ketikkan Thumbnail" required>
                                                <small class="text-danger"></small>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label class="add-course-label">Tanggal Event</label>
                                                <input name="start_date" value="31-08-2023" type="date" class="form-control" placeholder="" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <div class="quill-editor-full">
                                                    <textarea class="form-control" id="tiny" name="descripsi"></textarea>
                                                </div>
                                                <small class="text-danger"></small>
                                            </div>
                                          
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary mt-3"><i class=" fas fa-save"></i> Simpan Event</button>
                                            </div>
                                        </form>
        
        </div>
</section>

</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


