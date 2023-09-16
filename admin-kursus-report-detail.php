
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3">
    <h2>Kursus Report</h2>
    <nav>
    <ol class="breadcrumb">
     <li class="breadcrumb-item active"> Kursus Report</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
    <div>
      <h5 >Edit Topic</h5>
              <table class="table table-nowrap ">
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
      </div>
              <div class="card-body">

              <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
      <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Nominal Pembayaran</th>
                <th scope="col">Sertifikat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><input type="checkbox"></th>
                <td>Ahmad Djamal</td>
                <td>djamal@gmail.com</td>
                <td>083784327847364</td>
                <td><button class="btn btn-primary">Lunas</button></td>
                <td>  Rp 30000000 </td>
                <td> <a class="btn btn-primary disabled">Upload </a> </td>
              </tr>


              <button class="btn btn-success mb-3" >Enable Assessment</button>
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

