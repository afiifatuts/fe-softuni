
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Kursus Report Detail</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
             <!-- Referred Users-->
             <table class="table table-borderless mt-3">
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
                                                    <p class="text-black">Pendaftaran Ujian Basic batch - 3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p>Member</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="text-black">8 Member</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /Referred Users-->      
        </div>
          </div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kursus Report</h5>
         
          <!-- Table with stripped rows -->
          <table class="table datadefault">
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
                <td><button class="btn btn-success">Lunas</button></td>
                <td>  Rp 30000000 </td>
                <td> <input type="file"/> <button class="btn btn-primary">Upload</button> </td>
              </tr>

              <tr>
                <th scope="row"><input type="checkbox"></th>
                <td>Ahmad Djamal</td>
                <td>djamal@gmail.com</td>
                <td>083784327847364</td>
                <td><button class="btn btn-danger">Belum lunas</button></td>
                <td>  Rp 30000000 </td>
                <td> <input type="file"/> <button class="btn btn-primary">Upload</button> </td>
              </tr>

              <button class="btn btn-warning" >Enable Assessment</button>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>


</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>
