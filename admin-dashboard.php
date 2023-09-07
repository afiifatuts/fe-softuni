
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="">

<div class="pagetitle">
  <h1>Data Tables</h1>
 
</div><!-- End Page Title -->
      <div class="alert alert-warning alert-dismissible fade show ml-3" role="alert">
          <h2>Selamat datang, Admin!</h2>
      </div>

   
<section class="section dashboard ">


    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">
          <!-- Revenue Card -->
          <div class="col-lg-12 ">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <div class="d-flex align-items-center">
              <form action="https://softuni.id/admin/dashboard" method="get">
                                <div class="col-md-12 d-flex row">
                                    <div class="col-md-4 mt-3 form-group">
                                        <label class="add-course-label">Tanggal Awal</label>
                                        <input name="start_date" value="2023-08-05" type="date" class="form-control"  required>
                                    </div>
                                    <div class="col-md-4 mt-3 form-group">
                                        <label class="add-course-label">Tanggal Akhir</label>
                                        <input name="end_date" value="2023-08-31" type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 form-group" style="margin-top: 35px;">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </form>
                
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-6 mt-2 ml-3">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Total Payment</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>Rp 0</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-6 mt-2 ml-3">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">PAID MEMBERS</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>2</h6>
                 
                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Reports -->
        <div class="col-12 mt-2">
          <div class="card">


            <div class="card-body">
              <h5 class="card-title">Reports <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

     
      </div>
    </div><!-- End Left side columns -->


  </div>
</section>
</div>

</main><!-- End #main -->



<?php include './partial/footer.php'; ?>
