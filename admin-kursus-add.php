
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>

<div class="">
<div class="pagetitle">
  <h1>Tambah Kursus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active">Tambah Kursus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Kursus</h5>
<form action="https://softuni.id/admin/course/insert" method="POST" class="">
                            <div class="form-group">
                                <input type="hidden" name="s0ftun1.1d" value="93f08e9c75fb47618b78408823347d0b" />                                            <div class="form-group">
                                    <label class="add-course-label">Nama Kursus</label>
                                    <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                    <small class="text-danger"></small>
                                </div>
                                
                                <div class="form-group">
                                <label class="add-course-label">Thumbnail</label>
                                    <input name="thumbnail" value="" type="text" class="form-control" placeholder="Ketikkan Thumbnail Kursus" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Tag Level</label>
                                    <select name="level" class="form-select form-control select country-select" name="lvllist1">
                                        <option class="text-black">Pilih Level</option>
                                           <option value="0" class="text-black">Pemula</option>
                                           <option value="1" class="text-black">Menengah</option>
                                           <option value="2" class="text-black">Mahir</option>
                                    </select>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Tag Program</label>
                                    <select name="tagprogram" class="form-select form-control select country-select" name="taglist1">
                                        <option class="text-black">Pilih Tag</option>
                                           <option value="webinar" class="text-black">Webinar</option>
                                           <option value="short" class="text-black">Short</option>
                                           <option value="regular" class="text-black">Regular</option>
                                    </select>
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
                                    <label class="add-course-label">Nama Pengajar</label>
                                    <input name="teacher" value="" type="text" class="form-control" placeholder="Ketikkan Nama Pengajar" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Jumlah Modul</label>
                                    <input name="modul" value="" type="number" class="form-control" id="modul" placeholder="Ketikkan Jumlah Modul Kursus">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Harga Kursus</label>
                                    <input name="price" value="" type="number" class="form-control" id="priceInput" placeholder="Ketikkan Harga Kursus">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="add-course-label">Diskon</label>
                                    <input name="diskon" value="" type="number" class="form-control" id="diskonInput" placeholder="Ketikkan Diskon" required>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
    <label class="add-course-label">Harga Setelah Diskon :</label>
    <input type="text" class="form-control" id="hargaSetelahDiskonInput" disabled>
</div>

                            
                                <div class="form-group">
                                    <label class="add-course-label">Status Aktif</label>
                                    <select name="status" class="form-select form-control select country-select" name="sellist1">
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
                                    <select name="can_refund" class="form-select form-control select country-select" name="lvllist1">
                                        <option class="text-black">Pilih </option>
                                           <option value="0" class="text-black">No</option>
                                           <option value="1" class="text-black">Yes</option>
                                    </select>
                                    <small class="text-danger"></small>
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


