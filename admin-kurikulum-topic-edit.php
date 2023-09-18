
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-5 container">
    <h2>Edit Topik Kurikulum</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kurikulum.php">Kurikulum</a></li>
    <li class="breadcrumb-item"><a href="admin-kurikulum-topic.php">Topik Kurikulum</a></li>
      <li class="breadcrumb-item active"> Edit Topik</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
       
    <div class="card  ml-3 py-5 col-lg-11">
        <h2 class="m-auto">Edit Topik</h2>
        <form
        class="m-auto p-3"
  action="https://softuni.id/admin/curriculum/topic/5e099680-5b45-11ed-bef8-e82a44eb9daf/8467df8b-5b41-11ed-bef8-e82a44eb9daf"
  method="POST"
>
  <input
    type="hidden"
    name="s0ftun1.1d"
    value="b0173de37b99574857202c6a44b3ea61"
  />
  <div class="form-group">
    <label class="add-course-label">Judul</label>
    <input
      name="topic"
      value="Java Advanced"
      type="text"
      class="form-control"
      placeholder="Ketikkan Nama Kursus"
      required
    />
    <small class="text-danger"></small>
  </div>
  <div class="form-group">
    <label class="add-course-label">Keterangan</label>
    <input
      name="description"
      value="1. Java Advanced, 2. Java OOP"
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
      value="27"
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
      value="4"
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
      value="1"
      type="number"
      class="form-control"
      placeholder="Ketikkan Urutan"
      required
    />
    <small class="text-danger"></small>
  </div>
  <div class="widget-btn">
    <button type="submit" class="btn btn-primary">
      <i class="fas fa-save"></i> Simpan
    </button>
    <a
      onclick="confirmPopUp('https://softuni.id/admin/curriculum/topic/5e099680-5b45-11ed-bef8-e82a44eb9daf/8467df8b-5b41-11ed-bef8-e82a44eb9daf/delete')"
      type="submit"
      class="btn btn-outline-secondary"
      ><i class="fas fa-trash"></i> Hapus</a
    >
  </div>
</form>


   </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>








<?php include './partial/footer.php'; ?>


