
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="col-lg-8">
<div class="pagetitle">
  <h1>Edit Kursus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active">Edit Kursus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
    <h5 class="card-title">Judul Kursus</h5>
    <p class="card-text">Java Beginner</p>
    <form action="https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="1ceaaffe7aaafb332bcbf70ef8a4fda5" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Kursus</label>
                                                <input name="title" value="Test" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Level</label>
                                                <input name="level" value="2" type="number" class="form-control" placeholder="Ketikkan Level Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Tanggal Mulai</label>
                                                <input name="start_date" value="2022-06-13" type="date" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description">&lt;p&gt;Hanya test&lt;/p&gt;</textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Jumlah Modul</label>
                                                <input name="module" value="99" type="number" class="form-control" placeholder="Ketikkan Jumlah Modul" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Harga Kursus</label>
                                                <div class="form-group d-flex">
                                                    <input name="price" value="9699" type="number" class="form-control" style="margin-right: 8px;" placeholder="Ketikkan Harga Kursus">
                                                    <a href="https://softuni.id/admin/course/payment/f2b65422-adca-11ed-9446-005056470331" class="btn btn-info text-white d-flex "><b>Cicilan</b></a>
                                                    <small class="text-danger"></small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Nama Pengajar</label>
                                                <input name="teacher" value="-" type="text" class="form-control" placeholder="Ketikkan Nama Pengajar" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Status Aktif</label>
                                                <select name="status" class="form-select select country-select" name="sellist1">
                                                    <option class="text-black">Pilih Status</option>

                                                                                                            <option value="1"  class="text-black">Soon</option>
                                                                                                            <option value="2"  class="text-black">Open</option>
                                                                                                            <option value="3"  class="text-black">Closed</option>
                                                                                                            <option value="4" selected class="text-black">Finished</option>
                                                    
                                                </select>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Can Refund</label>
                                                <div class="enable-item d-flex justify-content-start">
                                                    <label class="mb-0 me-2">No</label>
                                                    <div class="form-check form-switch check-on m-0">
                                                        <input name="can_refund" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>
                                                    <label class="mb-0 ms-2">Yes</label>
                                                </div>
                                            </div>
                                           
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331/delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                           
                                        </form>
                            </div>
                            </div>

</div>

</main><!-- End #main -->





<?php include './partial/footer.php'; ?>


