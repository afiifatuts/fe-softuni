
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-5 container">
    <h2>Topic Kursus </h2>
    <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
     <li class="breadcrumb-item active">Topic Kursus</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 p-5 col-lg-11">

    <h5 class="">Topic Kursus </h5>
              <table class="table table-nowrap mb-2">
                                <tbody>
                                    <tr>
                                        <td width="20%">
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p>Judul</p>
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
                            <a href="admin-kursus-topic-add.php"> <button class="btn btn-primary mb-3" >Tambah Topic</button></a> 

<!-- Default Table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    
      <td>Bagaimana cara mendafar kursus di SoftUni Indonesia.
       </td>
      <td>
      <a href="admin-kursus-topic-edit.php"><button class="btn btn-success">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
<!-- End Default Table Example -->
              <!-- End Default Table Example -->
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>




