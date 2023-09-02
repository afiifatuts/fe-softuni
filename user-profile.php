<?php include './partial/header.php'; ?>
<main id="main" class="main container-fluid py-5π">
<div class="container-fluid py-5">
      <div class="container py-5">
<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <h2>Selamat datang, Nama!</h2>
   </div>


      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Kata Sandi</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title"> Detail Profile</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                <div class="col-lg-9 col-md-8">Kevin Anderson</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nomor Telephone</div>
                <div class="col-lg-9 col-md-8">08148679071</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                <div class="col-lg-9 col-md-8">11 November 1994</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                <div class="col-lg-9 col-md-8">Laki-Laki</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                <div class="col-lg-9 col-md-8">S1</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Alamat</div>
                <div class="col-lg-9 col-md-8">Jakarta</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                <div class="col-lg-9 col-md-8">Web Designer</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tentang Saya</div>
                <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
              </div>

            

             

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>
                <div class="row mb-3 form-group">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/profile/profile-img.jpeg" alt="Profile">
                    <div class="pt-2">
                    <input class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                </div>

                <div class="row mb-3 form-group">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Tentang Saya</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="email" value="Luei@mail.com">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nomor-telepon" class="col-md-4 col-lg-3 col-form-label">Nomor Telepon</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nomor-telepon" type="text" class="form-control" id="nomor-telepon" value="08142342345235">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal-lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                  <div class="col-md-8 col-lg-9">
                    <input type="date" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="jenis-kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                  <div class="col-md-8 col-lg-9">
                  <select class="form-control" aria-label="Default select example">
                      <option value="laki-laki" selected>Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                   </select>
                  </div>
                </div>

                <div class="row mb-3 form-group">
                  <label for="pendidikan-terakhir" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir</label>
                  <div class="col-md-8 col-lg-9">
                  <select class="form-control" aria-label="Default select example">
                      <option  value="sma" selected>SMA/SMK</option>
                      <option value="d2">D2</option>
                      <option value="d3">D3</option>
                      <option value="s1">S1</option>
                      <option value="s2">S2</option>
                   </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat </label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" type="text" class="form-control" id="alamat" value="alamat">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="pekerjaan" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" >
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

           

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Kata sandi saat ini</label>
                  <div class="col-md-4 col-lg-6">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Baru</label>
                  <div class="col-md-4 col-lg-6">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Kata Sandi Baru</label>
                  <div class="col-md-4 col-lg-6">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Ganti Kata Sandi</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>
</div>
</div>
</main><!-- End #main -->



<?php include './partial/footer.php'; ?>

