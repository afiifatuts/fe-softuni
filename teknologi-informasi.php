<?php include 'partial/header.php'; ?>
<style>

</style>
<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom"
  style="margin-bottom: 90px"
>
  <div class="container text-center py-5">
    <h1 class="text-white display-1">Teknologi Informasi</h1>
    <div class="d-inline-flex text-white mb-5">
      <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
      <i class="fa fa-angle-double-right pt-1 px-3"></i>
      <p class="m-0 text-uppercase">Kelas Teknologi Informasi</p>
    </div>

    <p
      class="text-white align-items-center mb-5"
      data-aos="fade-up"
      data-aos-delay="100"
    >
      SoftUni mempunyai banyak pilihan program sesuai dengan kebutuhan
      perusahaan anda. Mulai dari tahapan pengenalan sampai ke tahapan ahli yang
      akan dibimbing oleh tutor berpengalaman. Pengaturan jadwal kelas pun
      fleksibel sesuai kesepakatan dengan perusahaan (dan karyawan)
    </p>
  </div>
</div>
<!-- Header End -->
<section>
  <div class="container-fluid" style="min-height:100vh;">
    <div class="container">
      <div class="corpContainer">
        <nav class="">
          <div
            class="nav nav-tabs justify-content-center"
            id="nav-tab"
            role="tablist"
          >
            <div
              class="nav-link active"
              id="nav-python-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-python"
              type="button"
              role="tab"
              aria-controls="nav-python"
              aria-selected="true"
            >
              Python
          </div>
            <div
              class="nav-link"
              id="nav-java-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-java"
              type="button"
              role="tab"
              aria-controls="nav-java"
              aria-selected="false"
            >
              Java
            </div>
            <div
              class="nav-link"
              id="nav-js-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-js"
              type="button"
              role="tab"
              aria-controls="nav-js"
              aria-selected="false"
            >
            Javascript
            </div>
            <div
              class="nav-link"
              id="nav-cpp-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-cpp"
              type="button"
              role="tab"
              aria-controls="nav-cpp"
              aria-selected="false"
            >
              C++/C#
            </div>
            <div
              class="nav-link"
              id="nav-server-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-server"
              type="button"
              role="tab"
              aria-controls="nav-server"
              aria-selected="false"
            >
              Server/Cloud
            </div>
            <div
              class="nav-link"
              id="nav-ml-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-ml"
              type="button"
              role="tab"
              aria-controls="nav-ml"
              aria-selected="false"
            >
              ML/Deep Learning
            </div>
            <div
              class="nav-link"
              id="nav-db-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-db"
              type="button"
              role="tab"
              aria-controls="nav-db"
              aria-selected="false"
            >
              Database
            </div>
            <div
              class="nav-link"
              id="nav-cyber-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-cyber"
              type="button"
              role="tab"
              aria-controls="nav-cyber"
              aria-selected="false"
            >
              Cyber Security
            </div>
            <div
              class="nav-link"
              id="nav-lainnya-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-lainnya"
              type="button"
              role="tab"
              aria-controls="nav-lainnya"
              aria-selected="false"
            >
              Lainnya
            </div>
          </div>
        </nav>
       <!-- disini --><?php include 'corporate/corp-it.php'; ?>
      </div>
    </div>
  </div>
</section>



<!-- Modal -->
<div
  class="modal fade"
  id="formModal"
  tabindex="-1"
  aria-labelledby="formModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Form Konsultasi</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ><i class="fas fa-window-close"></i></button>
      </div>
      <div class="modal-body px-5 py-1">
        <div class="add-course-form">
          <form action="https://softuni.id/kontak" method="POST">
            <input
              type="hidden"
              name="s0ftun1.1d"
              value="2b7029dc9317df1b502fd63629560d6c"
            />
            <input name="type" hidden value="Enterprise IT" type="text" />
            <div class="form-group">
              <label class="form-control-label">Email</label>
              <input
                name="email"
                type="email"
                class="form-control"
                placeholder="Ketikan Email Aktif"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label class="form-control-label">Nama Lengkap</label>
              <input
                name="name"
                type="text"
                class="form-control"
                placeholder="Ketikan Nama Lengkap"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label class="form-control-labTeleponel">Nomor </label>
              <input
                name="phone"
                type="text"
                class="form-control"
                placeholder="Ketikan Nomor Telepon Aktif"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Detail Konsultasi</label>
              <textarea
                area
                name="message"
                class="form-control"
                placeholder="Isi Detail Konsultasi di sini..."
                rows="4"
              ></textarea>
              <small class="text-danger"></small>
            </div>
            <div
              class="g-recaptcha mt-3 mb-2"
              data-sitekey="6Lc4GtYiAAAAAH49laSizRCLOaCzxOPwtVseKyG7"
            ></div>
            <div class="d-grid">
              <button
                onclick="loadingPopUp()"
                class="btn btn-warning btn-start"
                type="submit"
              >
                Daftar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<section>
  <div class="container-fluid corp-contact" data-aos="fade-up">
    <div class="container">
    <div class="section-title">
      <h2>Belum temukan kelas yang sesuai kebutuhan anda?</h2>
      <p>
        Konsultasikan kebutuhan anda dengan kami dan dapatkan kelas yang anda
        butuhkan hanya dengan satu klik
      </p>
    </div>
    <div class="text-center">
      <a
        data-bs-toggle="modal"
        data-bs-target="#formModal"
        style="padding: 10px 16px !important"
        class="mt-3 mx-auto btn btn-warning btn-rounded"
        ><i class="fas fa-phone-alt"></i><b> HUBUNGI</b>
      </a>
    </div>
  </div>
  </div>
</section>

<!-- Footer -->
<?php include 'partial/footer.php'; ?>
