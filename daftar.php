<?php include 'partial/header.php'; ?>



  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-black" style="max-width: 600px; margin: auto;">
  
         
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-5 mt-xl-n5" style="box-shadow: 1px 1px 1px 1px rgba(0,0,0,.14); ">
  
            <form style="width: 23rem; margin: auto;">
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Daftar</h3>
  
                <!-- Nama input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                  <input type="nama"  id="namaLengkap" class="form-control" required placeholder="Ketikan Nama Lengkap" />
                </div>

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

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="ulangPassword">Konfirmasi Kata Sandi</label>
                  <input type="password" id="ulangPassword" class="form-control" placeholder="Ketikan Kembali Kata Sandi" required  />
                </div>

                <!-- No Hp input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="noHp">Nomor HP</label>
                  <input type="password" id="noHp" class="form-control" placeholder="Ketikan Nomor HP Aktif" required  />
                </div>

                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 col-lg-12">
                  Daftar
                </button>
              <p>Sudah punya akun? <a href="login.php" class="link-info">Masuk</a></p>
  
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  </section>


  <?php include 'partial/footer.php'; ?>
