
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin ">
<div class="pagetitle mb-5 container">
    <h2>Edit Kursus</h2>
    <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active">Kursus Edit</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card  col-lg-11 ml-3 py-5 col-lg-11 ">
    <h2 class="m-auto">Edit Kursus</h2>

      <form
        action="https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331"
        method="POST"
        class="m-auto "
      >
        <input
          type="hidden"
          name="s0ftun1.1d"
          value="1ceaaffe7aaafb332bcbf70ef8a4fda5"
        />
        <div class="form-group">
          <label class="add-course-label">Nama Kursus</label>
          <input
            name="title"
            value="Test"
            type="text"
            class="form-control"
            placeholder="Ketikkan Nama Kursus"
            required
          />
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Tag Level</label>
          <select
            name="level"
            class="form-select form-control select country-select"
            name="lvllist1"
          >
            <option class="text-black">Pilih Level</option>
            <option selected value="0" class="text-black">Pemula</option>
            <option value="1" class="text-black">Menengah</option>
            <option value="2" class="text-black">Mahir</option>
          </select>
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Tag Program</label>
          <select
            name="tagprogram"
            class="form-select form-control select country-select"
            name="taglist1"
          >
            <option class="text-black">Pilih Tag</option>
            <option value="webinar" class="text-black">Webinar</option>
            <option selected value="short" class="text-black">Short</option>
            <option value="regular" class="text-black">Regular</option>
          </select>
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Tanggal Mulai</label>
          <input
            name="start_date"
            value="2022-06-13"
            type="date"
            class="form-control"
            placeholder="Ketikkan Nama Kursus"
            required
          />
          <small class="text-danger"></small>
        </div>

        <div class="form-group">
          <label class="add-course-label">Deskripsi</label>
          <textarea id="tiny" name="description">
&lt;p&gt;Hanya test&lt;/p&gt;</textarea
          >
          <small class="text-danger"></small>
        </div>

        <div class="form-group">
          <label class="add-course-label">Nama Pengajar</label>
          <input
            name="teacher"
            value="-"
            type="text"
            class="form-control"
            placeholder="Ketikkan Nama Pengajar"
            required
          />
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Jumlah Modul</label>
          <input
            name="module"
            value="99"
            type="number"
            class="form-control"
            placeholder="Ketikkan Jumlah Modul"
            required
          />
          <small class="text-danger"></small>
        </div>

        <div class="form-group">
          <label class="add-course-label">Harga Kursus</label>
          <div class="d-flex">
            <input
              name="priceInput"
              value="100000"
              type="number"
              class="form-control"
              id="priceInput"
              placeholder="Ketikkan Harga Kursus"
            />
            <a
              href="admin-kursus-payment.php"
              class="btn btn-info text-white d-flex"
              ><b>Cicilan</b></a
            >
          </div>
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Diskon</label>
          <input
            name="diskon"
            value="10"
            type="number"
            class="form-control"
            id="diskonInput"
            placeholder="Ketikkan Diskon"
            required
          />
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Harga Setelah Diskon :</label>
          <input
            name="price"
            type="text"
            class="form-control"
            id="hargaSetelahDiskonInput"
            value="90000"
            disabled
          />
        </div>

        <div class="form-group">
          <label class="add-course-label">Status Aktif</label>
          <select
            name="status"
            class="form-select select country-select"
            name="sellist1"
          >
            <option class="text-black">Pilih Status</option>

            <option value="1" class="text-black">Soon</option>
            <option value="2" class="text-black">Open</option>
            <option value="3" class="text-black">Closed</option>
            <option value="4" selected class="text-black">Finished</option>
          </select>
          <small class="text-danger"></small>
        </div>
        <div class="form-group">
          <label class="add-course-label">Can Refund</label>
          <select
            name="can_refund"
            class="form-select form-control select country-select"
            name="lvllist1"
          >
            <option class="text-black">Pilih</option>
            <option value="0" selected class="text-black">No</option>
            <option value="1" class="text-black">Yes</option>
          </select>
          <small class="text-danger"></small>
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save" style="margin-right: 10px"></i> Simpan
        </button>
        <a
          onclick="confirmPopUp('https://softuni.id/admin/course/f2b65422-adca-11ed-9446-005056470331/delete')"
          type="submit"
          class="btn btn-danger"

          ><i class="fas fa-trash" style="margin-right: 10px"></i> Hapus</a
        >
      </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>







