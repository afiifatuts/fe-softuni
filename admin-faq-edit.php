
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-3 container">
    <h2>Edit FAQ</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-faq.php">FAQ</a></li>
      <li class="breadcrumb-item active"> Edit FAQ</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Edit FAQ</h2>
           <form  class="m-auto p-3" action="https://softuni.id/admin/faq/31016faa-55bf-11ed-9cd0-e82a44eb9daf" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="1442be0a456793d53c4ac415a67ca1bb" />                                            <div class="form-group">
                                                <label class="add-course-label">Judul</label>
                                                <input name="title" value="Apakah kursus persiapan pemrograman benar-benar GRATIS?" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description">&lt;p&gt;Kursus Programming Basics dapat benar &lt;strong&gt;GRATIS&amp;nbsp;&lt;/strong&gt;dengan membayar biaya komitmen, jika kamu ingin mengikuti &lt;strong&gt;Ujian Sertifikasi dari SoftUni Pusat&lt;/strong&gt; maka uang akan dikonversi menjadi biaya ujian&lt;strong&gt;. &lt;/strong&gt;dan apabila &lt;strong&gt;Tidak&lt;/strong&gt; mengikuti &lt;strong&gt;Ujian Sertifikasi SoftUni Pusat&lt;/strong&gt; maka kami akan &lt;strong&gt;mengembalikan Biaya Komitmen (GRATIS)&lt;/strong&gt;.&lt;/p&gt;</textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Urutan</label>
                                                <input name="sequence" value="1" type="number" class="form-control" placeholder="Ketikkan Urutan">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/faq/31016faa-55bf-11ed-9cd0-e82a44eb9daf/delete')" type="submit" class="btn btn-outline-secondary" ><i class=" fas fa-trash" ></i> Hapus</a>
                                            </div>
                                        </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

