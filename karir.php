<?php include 'partial/header.php'; ?>
<style>
  .base-container {
    flex-direction: column;
    align-items: center;
    padding-left: 15px;
    padding-right: 15px;
    display: flex;
  }
  .full-width {
    width: 100%;
  }
  .career-list-item-wrapper {
    margin-top: 10px;
    background-color: #eef4f8;
    border-radius: 4px;
    padding-top: 20px;
    padding-bottom: 20px;
    display:flex;
    /* justify-content:space-between;
          display: flex; */
  }

  @media (max-width: 992px) {
    .career-list-item-wrapper {
      padding: 5rem;
      margin-top: 10px;
      text-align: center;
      flex-direction:column;
    }

    .base-container {
      margin:auto;
      width: fit-content;
  }
      .full-width {
      align-items: center;
      }

      .primary-button{
        margin-top:20px;
      }

    
  }

  .career-position {
    font-size: 18px;
    line-height: 24px;
  }

  h6 {
    color: #0d369f;
    letter-spacing: 0.5px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px !important;
    font-weight: 700;
    line-height: 1.2em;
  }

  .career-location,
  .career-type {
    font-size: 16px;
    line-height: 24px;
  }

  .primary-button:hover {
    color: #0d369f;
    background-color: #fff;
  }
  a:active,
  a:hover {
    outline: 0;
  }
  .primary-button {
    color: #eee;
    text-align: center;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    background-color: #0d369f;
    border: 1px solid #0d369f;
    border-radius: 4px;
    padding: 20px 48px;
    font-family: Open Sans, sans-serif;
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    transition: all 0.3s;
    display: inline-block;
  }

</style>

<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom"
  style="margin-bottom: 90px"
>
  <div class="container text-center py-5">
    <h1 class="text-white display-1">Karir</h1>
    <div class="d-inline-flex text-white mb-5">
      <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
      <i class="fa fa-angle-double-right pt-1 px-3"></i>
      <p class="m-0 text-uppercase">Karir</p>
    </div>
  </div>
</div>

<!-- Jika belum ada posisi  -->
<!-- <section style="min-height:50vh;">
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
      
      <div class="container">
          <div class="base-container">
            <div class="full-width">
               <h4 class="font-weight-light">Posisi Belum Tersedia...</h4>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Jika sudah ada posisi  -->
<section>
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
        <div class="">
          <div class="mb-5">
            <div class="section-title position-relative mb-5">
              <h1 class="display-4">Bergabunglah bersama  kami</h1>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="base-container">
            <div class="full-width">



              <div class="m-2">
                <div class="bg-light d-flex align-items-center flex-lg-row flex-column justify-content-between p-5">
                  <div class="d-flex flex-column align-items-center">
                    <div class="career-title-mobile">Position</div>
                    <h6 class="career-position"><b>Project Manager</b></h6>
                  </div>
                  <div class="">
                    <a
                      href="karir-detail.php"
                      class="primary-button w-button"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>

          
              

         





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'partial/footer.php'; ?>
