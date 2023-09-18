
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-3 container">
    <h2>Tambah Event</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-event.php">Event</a></li>
      <li class="breadcrumb-item active"> Tambah Event</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Tambah Event Baru</h2>
        <form class="m-auto p-3" action="https://softuni.id/admin/event/insert" method="POST">
            <input type="hidden" name="" value="" />                                            
            <div class="form-group">
                                                <label class="add-course-label">Judul Event</label>
                                                <input name="title" value="test" type="text" class="form-control" placeholder="Ketikkan Judul Event" required>
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
                                                    <textarea class="form-control" id="tiny" name="descripsi" ></textarea>
                                                </div>
                                                <small class="text-danger"></small>
                                            </div>
                                          
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary mt-3"><i class=" fas fa-save"></i> Simpan Event</button>
                                            </div>
                                        </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

