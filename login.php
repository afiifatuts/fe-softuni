<?php include 'partial/header.php'; ?>


  <section class="">
    <div class="container-fluid my-5" >
      <div class="row">
        <div class="col-sm-12 text-black" style="max-width: 600px; margin: auto;">
  
          <div class="d-flex align-items-center form-gabung" >
  
            <form style="width: 23rem; margin: auto;">
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk</h3>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Ketikan Email Aktif" required />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Kata Sandi</label>
                  <input type="password" id="password" class="form-control" placeholder="Ketikan Kata Sandi" required  />
                </div>
                <p class=" pb-lg-2"><a class="text-primary" href="forgot-password.php">Forgot password?</a></p>

                <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block col-lg-12">
                  Masuk
                </button>
            <a href="daftar.php" class="mb-5 btn btn-primary btn-block col-lg-12"  style="border-radius: 10px;">Daftar</a>
  
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  </section>


  <?php include 'partial/footer.php'; ?>
