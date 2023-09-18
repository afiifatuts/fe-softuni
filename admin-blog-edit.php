
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-3 container">
 <h2> Edit Blog</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-blog.php">Blog</a></li>
      <li class="breadcrumb-item active"> Edit Blog</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Edit Blog</h2>
        <form class="m-auto p-3" action="https://softuni.id/admin/blog/b8cfb3dc-5b97-11ed-aaa6-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="8995698a5d1efbebe3459ec065a96dc3" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Blog</label>
                                                <input name="title" value="Bagaimana cara mendafar kursus di SoftUni Indonesia." type="text" class="form-control" placeholder="Ketikkan Nama Kursus">
                                                <small class="text-danger"></small>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description">&lt;p&gt;Berikut alur Pendaftaran Kursus SoftUni:&lt;/p&gt;
&lt;ol&gt;
&lt;li&gt;Daftar Akun mu di softuni.id&lt;/li&gt;
&lt;li&gt;Akun yang baru didaftarkan harus dikonfirmasi terlebih dahulu&lt;/li&gt;
&lt;li&gt;Setelah akunmu terkonfirmasi lanjut ke tahap daftar kursus (softuni.id) lalu pilih kursus yang kamu minati.&lt;/li&gt;
&lt;li&gt;Setelah daftar lakukan pembayaran biaya komitmen terlebih dahulu.&lt;/li&gt;
&lt;li&gt;Setelah kamu membayar biaya komitmen maka kamu sudah resmi terdaftar pada program kursus dan Tim akan menghubungi mu segera mungkin ketika kursus akan dimulai.&lt;/li&gt;
&lt;/ol&gt;</textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="widget-btn">
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>

                                                <a onclick="confirmPopUp('https://softuni.id/admin/blog/b8cfb3dc-5b97-11ed-aaa6-005056470331/delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                            </div>
                                        </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

