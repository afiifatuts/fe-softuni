
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle mb-3 container">
    <h2>Reset Password</h2>
    <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"> Reset Password</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Reset Password</h2>
        <form class="mt-3 mx-0 mx-lg-5" action="https://softuni.id/reset-katasandi" method="post">
                                    <input type="hidden" name="s0ftun1.1d" value="513b3606371f14940dd12456bf5f65eb" />  
                                      <div class="form-group">
                                        <label class="form-control-label">Kata Sandi Lama</label>
                                        <input name="oldPassword" type="password" class="form-control" placeholder="Ketikan Kata Sandi Lama" value="" required>
                                        <small class="form-text text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Kata Sandi Baru</label>
                                        <input name="newPassword" type="password" class="form-control" placeholder="Ketikan Kata Sandi Baru" value="" required>
                                        <small class="form-text text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Konfirmasi Kata Sandi</label>
                                        <input name="confirmNewPass" type="password" class="form-control" placeholder="Ketikan Konfirmasi Kata Sandi" value="" required>
                                        <small class="form-text text-danger"></small>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-start" type="submit">Simpan</button>
                                    </div>
                                </form>
   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>

