
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-3 container">
    <h2>Edit Event</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-event.php">Event</a></li>
      <li class="breadcrumb-item active"> Edit Event</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Edit Event</h2>
        <form class="m-auto p-3" action="https://softuni.id/admin/event/edit" method="POST">
            <input type="hidden" name="" value="" />                                            
            <div class="form-group">
                                                <label class="add-course-label">Judul Event</label>
                                                <input name="title" value="test" type="text" class="form-control" placeholder="Ketikkan Judul Event" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Tanggal Event</label>
                                                <input name="start_date" type="date" value="2024-01-08" class="form-control" placeholder="" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <div class="quill-editor-full">
                                                    <textarea class="form-control" id="tiny" name="descripsi">&lt;p&gt;Berikut alur Pendaftaran Kursus SoftUni:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Daftar Akun mu di softuni.id&lt;/li&gt;
&lt;li&gt;Akun yang baru didaftarkan harus dikonfirmasi terlebih dahulu&lt;/li&gt;
&lt;li&gt;Setelah akunmu terkonfirmasi lanjut ke tahap daftar kursus (softuni.id) lalu pilih kursus yang kamu minati.&lt;/li&gt;
&lt;li&gt;Setelah daftar lakukan pembayaran biaya komitmen terlebih dahulu.&lt;/li&gt;
&lt;li&gt;Setelah kamu membayar biaya komitmen maka kamu sudah resmi terdaftar pada program kursus dan Tim akan menghubungi mu segera mungkin ketika kursus akan dimulai.&lt;/li&gt;
&lt;/ol&gt;</textarea>
                                                </div>
                                                <small class="text-danger"></small>
                                            </div>
                                          
                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-primary "><i class=" fas fa-save"></i> Simpan Event</button>
                                                <a
      onclick="confirmPopUp('https://softuni.id/admin/curriculum/topic/5e099680-5b45-11ed-bef8-e82a44eb9daf/8467df8b-5b41-11ed-bef8-e82a44eb9daf/delete')"
      type="submit"
      class="btn btn-outline-secondary"
      ><i class="fas fa-trash"></i> Hapus</a
    >
                                            </div>
                                        </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

