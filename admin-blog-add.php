
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-5 container">
    <h2>Tambah Blog</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-blog.php">Blog</a></li>
      <li class="breadcrumb-item active"> Tambah Blog</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Tambah Blog Baru</h2>
        <form class="m-auto p-3" action="https://softuni.id/admin/blog/insert" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="bef0da976e30966f03ef4329f56e92f9" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Blog</label>
                                                <input name="title" type="text" class="form-control" placeholder="Ketikkan Nama Kursus">
                                                <small class="text-danger"></small>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description"></textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class=" mt-3">
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



<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Blogs</li>
      <li class="breadcrumb-item active">Tambah</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


  <div class="card">
            
            <div class="card-body">

            <form action="https://softuni.id/admin/blog/insert" method="POST">
                <input type="hidden" name="s0ftun1.1d" value="3ba2d97934f310ff6c46e5c7532f818e" />                                            <div class="form-group">
                    <label class="add-course-label">Nama Blog</label>
                     <input name="title" type="text" class="form-control" placeholder="Ketikkan Nama Kursus">
                     <small class="text-danger"></small>
                

                                            
                <div class="form-group">
                <label class="add-course-label">Deskripsi</label>

                <div class="col-lg-8">
        

                    <div class="quill-editor-full">
                        <p>Hello World!</p>
                        <p>This is Quill <strong>full</strong> editor</p>
                    </div>
                    </div>
                         
                </div>
               
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
           
             </form>
     

               


            </div>



</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


