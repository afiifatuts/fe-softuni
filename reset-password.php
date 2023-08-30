<?php include 'partial/header.php'; ?>


  <section class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-black" style="max-width: 600px; margin: auto;">
  
        
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-5 mt-xl-n5" style="box-shadow: 1px 1px 1px 1px rgba(0,0,0,.14); ">
  
            <form style="width: 23rem; margin: auto;">
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reset Kata Sandi</h3>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Kata Sandi Baru</label>
                  <input type="password" id="password" class="form-control" placeholder="Ketikan Kata Sandi Baru" required />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="password2">Konfirmasi Kata Sandi Baru</label>
                  <input type="password" id="password2" class="form-control" placeholder="Ketikan Kata Sandi Baru" required />
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 col-lg-12">
                  Ubah Password
                </button>
            
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  </section>

  <?php include 'partial/footer.php'; ?>
