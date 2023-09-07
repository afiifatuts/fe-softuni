
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div>

<div class="pagetitle">
  <h1>Kursus Report</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Kursus Report</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kursus Report</h5>
         
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Course</th>
                <th scope="col">Joined Member</th>
                <th scope="col">Paid Member</th>
                <th scope="col">Total Payment</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><p>Pendaftaran Ujian Basic batch - 3</p>
                <p>Rp 600000</p>
                </td>
                <td>8</td>
                <td>5</td>
                <td>1500000</td>
                <td>  <a href="admin-kursus-report-detail.php"> <button class="btn btn-success">Detail</button></a> </td>
              </tr>


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
