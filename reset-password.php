<?php include 'partial/header.php'; ?>


  <section class="">
    <div class="container-fluid py-5" >
      <div class="row">
        <div class="col-sm-12 text-black" style="max-width: 600px; margin: auto;">
  
        
          <div class="d-flex align-items-center form-gabung py-5">
  
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
                <button type="submit" class="btn btn-warning btn-block mb-4 col-lg-12">
                  Ubah Password
                </button>
            
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  </section>

  <?php include 'partial/footer.php'; ?>
