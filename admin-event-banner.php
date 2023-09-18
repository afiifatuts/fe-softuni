
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Unggah Banner Event</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-event.php">Event</a></li>
      <li class="breadcrumb-item active"> Unggah Banner Event</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11">
      <h5 class="mx-2">Unggah Banner Event</h5>
      <form
        action="https://softuni.id/admin/event/b8cfb3dc-5b97-11ed-aaa6-005056470331/upload"
        method="POST"
        enctype="multipart/form-data"
      >
        <input
          type="hidden"
          name="s0ftun1.1d"
          value="75b8aa37105e5ab8ee9a1f08fa814ed1"
        />
        <div class="settings-tickets-blk course-instruct-blk table-responsive">
          <div class="my-2 form-group d-flex">
            <p class="mr-2">Judul :</p>
            <p>event</p>
          </div>

          <div class="form-group ">
            <img
              src="https://softuni.id/blog_image/b8cfb3dc-5b97-11ed-aaa6-005056470331.jpg"
              class="w-50"
            />
          </div>
          <div class="custom-file">
            <input
              name="banner"
              type="file"
              class="custom-file-input"
              id="customFile"
            />
            <label class="custom-file-label" for="customFile"
              >Pilih Banner</label
            >
          </div>
          <small class="text-danger"></small>
        </div>

        <div class="my-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
          <a
            onclick="confirmPopUp('https://softuni.id/admin/blog/b8cfb3dc-5b97-11ed-aaa6-005056470331/banner-delete')"
            type="submit"
            class="btn btn-outline-secondary"
            ><i class="fas fa-trash"></i> Hapus</a
          >
        </div>
      </form>
    </div>
  </div>
</section>




  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>


