<?php include 'partial/header.php'; ?>


  <section class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-black" style="max-width: 600px; margin: auto;">
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-5 mt-xl-n5" style="box-shadow: 1px 1px 1px 1px rgba(0,0,0,.14); ">
  
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

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 col-lg-12">
                  Daftar
                </button>
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="forgot-password.php">Forgot password?</a></p>
              <p>Belum punya akun? <a href="register.html" class="link-info">Daftar</a></p>
  
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  </section>


  <?php include 'partial/footer.php'; ?>
