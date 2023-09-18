
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-5 container">
    <h2>Tambah Topik Kurikulum</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
    <li class="breadcrumb-item"><a href="admin-kurikulum-topic.php">Topik Kurikulum</a></li>
      <li class="breadcrumb-item active"> Tambah Topik</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Tambah Topik Baru</h2>
        <form class="m-auto p-3"
  action="https://softuni.id/admin/curriculum/topic/insert/8467df8b-5b41-11ed-bef8-e82a44eb9daf"
  method="POST"
>
  <input
    type="hidden"
    name="s0ftun1.1d"
    value="dd0969b8c62429cbd686d1d1174b1bad"
  />
  <div class="form-group">
    <label class="add-course-label">Judul</label>
    <input
      name="topic"
      value=""
      type="text"
      class="form-control"
      placeholder="Ketikkan Judul"
      required
    />
    <small class="text-danger"></small>
  </div>
  <div class="form-group">
    <label class="add-course-label">Keterangan</label>
    <input
      name="description"
      value=""
      type="text"
      class="form-control"
      placeholder="Ketikkan Keterangan"
    />
    <small class="text-danger"></small>
    <small class="text-secondary"
      >Gunakan (,) sebagai pemisah. Contoh: (keterangan 1,keterangan 2)</small
    >
  </div>
  <div class="form-group">
    <label class="add-course-label">Jumlah Kredit</label>
    <input
      name="credit"
      value=""
      type="number"
      class="form-control"
      placeholder="Ketikkan Jumlah Kredit"
    />
    <small class="text-danger"></small>
  </div>
  <div class="form-group">
    <label class="add-course-label">Durasi</label>
    <input
      name="duration"
      value=""
      type="number"
      class="form-control"
      placeholder="Ketikkan Durasi"
    />
    <small class="text-danger"></small>
  </div>
  <div class="form-group">
    <label class="add-course-label">Urutan</label>
    <input
      name="sequence"
      value=""
      type="number"
      class="form-control"
      placeholder="Ketikkan Urutan"
      required
    />
    <small class="text-danger"></small>
  </div>
  <div>
    <button type="submit" class="btn btn-primary">
      <i class="fas fa-save"></i> Simpan
    </button>
  </div>
</form>

   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>


