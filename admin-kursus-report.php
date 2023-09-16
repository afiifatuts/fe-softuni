
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
              <div class="card-body">
              <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
        <thead>
          <tr>
          <th scope="col">No</th>
                <th scope="col">Kursus</th>
                <th scope="col">Harga</th>
                <th scope="col">Joined Member</th>
                <th scope="col">Paid Member</th>
                <th scope="col">Total Payment</th>
                <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          
        <tr>
                <th scope="row">1</th>
                <td>Pendaftaran Ujian Basic batch - 3 </td>
                <td>Rp 600000</td>
                <td>8</td>
                <td>5</td>
                <td>1500000</td>
                <td>  <a href="admin-kursus-report-detail.php"> <button class="btn btn-success">Lihat Detail</button></a> </td>
              </tr>
          
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

