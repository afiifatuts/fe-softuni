
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3">
    <h2>Blog</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item active">Blog</li>
    
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
    <div>
      <h5 class="mb-3" > Blog List</h5>
      </div>
              <div class="card-body">

              <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
      <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Blog</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Java Advance</td>
                <td>   <a href="admin-blog-edit.php" class="btn btn-secondary"> Edit</a>
                        <a href="admin-blog-banner.php" class="btn btn-danger">Banner</a> </td>
              </tr>

            
              <a href="admin-blog-add.php" class="btn btn-primary mb-3" >Tambah Blog </a>
            </tbody>
      </table>








            
                <!-- End Default Table Example -->
              </div>
            </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>


<?php include './partial/footer.php'; ?>


