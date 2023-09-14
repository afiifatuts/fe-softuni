<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

 
<div class="main-admin ">
  <div class="pagetitle pl-3">
        <div class="alert alert-warning alert-dismissible fade show col-lg-8 col-12" role="alert">
            <h2>Selamat datang, Admin!</h2>
        </div>
  </div>

<div class="container">
  <div class="row">
    <!-- Form  -->
    <div class="col-lg-6 col-md-12">
      <div class="card p-4">
        <div class="">
          <form action="https://softuni.id/admin/dashboard" method="get">
            <div class="row d-flex align-items-center">
              <div class="m-3 form-group">
                <label class="add-course-label">Tanggal Awal</label>
                <input
                  name="start_date"
                  value="2023-08-05"
                  type="date"
                  class="form-control"
                  required
                />
              </div>
              <div class="m-3 form-group">
                <label class="add-course-label">Tanggal Akhir</label>
                <input
                  name="end_date"
                  value="2023-08-31"
                  type="date"
                  class="form-control"
                  required
                />
              </div>
              <div class="m-3 form-group">
                <button type="submit" class="btn btn-primary">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Total payment  -->
    <div class="col-lg-6 col-md-12">
      <div class="card p-2 pl-3">
        <div class="card-title"><h4>Total Payment</h4></div>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div
              class="card-icon rounded-circle d-flex align-items-center justify-content-center"
            >
              <i class="bi bi-currency-dollar"></i>
            </div>
            <div class="ps-3">
              <h6>Rp 0</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

  



<!-- Table Grafik -->
   <section>

      <div class="container pl-1">

          <!-- Revenue Card -->
         

         <!-- Reports -->
         <div class="col-12 mt-2">
          <div class="card">


            <div class="card-body">
              <h5 class="card-title">Reports <span>/sales</span></h5>

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
    
   </section>
  
<!-- End mainAdmin -->
</div>


<!-- End  -->
</div>


<?php include './partial/footer.php'; ?>







