
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3">
    <h2>Topik Kurikulum</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
    <li class="breadcrumb-item active">Topik Kurikulum</li>
    
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
    <div>
      <h5 > Topik Kurikulum</h5>
              <table class="table table-nowrap ">
                                <tbody>
                                    <tr>
                                        <td width="20%">
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p>Judul Kurikulum</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="text-black">Javascript Basic</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                <th scope="col">Judul Topic</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Java Advance</td>
                <td> <a href ="admin-kurikulum-topic-edit.php" class="btn btn-primary">Edit Topic</a> </td>
              </tr>


              <a href="admin-kurikulum-topic-add.php" class="btn btn-success mb-3" >Tambah Topic </a>
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

