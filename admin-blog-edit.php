
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Blogs</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="card">
  <h5 class="card-title">Edit Blog</h5>
            
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
               
                <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
           
             </form>
     

               


            </div>
          </div>
</section>



</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>


