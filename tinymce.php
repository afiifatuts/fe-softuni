
<?php include './partial/header.php'; ?>
  <div>
   <textarea id="tiny"></textarea>
 </div>

 <div class="col-lg-8">
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Kursus</li>
      <li class="breadcrumb-item active">Tambah Kursus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
<form action="https://softuni.id/admin/course/insert" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="s0ftun1.1d" value="93f08e9c75fb47618b78408823347d0b" />                                            <div class="form-group">
                                    <label class="add-course-label">Nama Kursus</label>
                                    <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Tag Level</label>
                                    <input name="level" value="" type="number" class="form-control" placeholder="Ketikkan Level Kursus" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Tag Program</label>
                                    <input name="program" value="" type="text" class="form-control" placeholder="Ketikkan Program Kursus" required>
                                    <small class="text-danger"></small>
                                </div>

                                <div class="form-group">
                                    <label class="add-course-label">Tanggal Mulai</label>
                                    <input name="start_date" value="31-08-2023" type="date" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Deskripsi</label>
                                    <div>
   <textarea id="tiny"></textarea>
 </div>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Jumlah Modul</label>
                                    <input name="module" value="" type="number" class="form-control" placeholder="Ketikkan Jumlah Modul" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Harga Kursus</label>
                                    <input name="price" value="" type="number" class="form-control" placeholder="Ketikkan Harga Kursus">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Diskon</label>
                                    <input name="diskon" value="" type="number" class="form-control" placeholder="Ketikkan Diskon" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Nama Pengajar</label>
                                    <input name="teacher" value="" type="text" class="form-control" placeholder="Ketikkan Nama Pengajar" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
                                <div class="form-group">
                                    <label class="add-course-label">Status Aktif</label>
                                    <select name="status" class="form-control form-select select country-select" name="sellist1">
                                        <option class="text-black">Pilih Status</option>

                                                                                                <option value="1" class="text-black">Soon</option>
                                                                                                <option value="2" class="text-black">Open</option>
                                                                                                <option value="3" class="text-black">Closed</option>
                                                                                                <option value="4" class="text-black">Finished</option>
                                        
                                    </select>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Can Refund</label>
                                    <div class="enable-item d-flex justify-content-start">
                                        <label class="mb-0 me-2">No</label>
                                        <div class="form-check form-switch check-on m-0">
                                            <input name="can_refund" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
                                        </div>
                                        <label class="mb-0 ms-2">Yes</label>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                </div>
                            </form>
                            </div>
                            </div>

</div>

</main><!-- End #main -->




<?php include './partial/footer.php'; ?>