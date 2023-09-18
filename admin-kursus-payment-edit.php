
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-5 container">
    <h2>Tambah Payment</h2>
    <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item "><a href="admin-kursus-edit.php">Kursus Edit</a></li>
      <li class="breadcrumb-item "><a href="admin-kursus-payment.php">Cicilan Kursus</a></li>
      <li class="breadcrumb-item active"> Edit Payment</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
    <div class="mx-4">
      <h5 >Edit Payment</h5>
              <table class="table table-nowrap ">
                                <tbody>
                                    <tr>
                                        <td width="20%">
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p>Judul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="text-black">Javascript Basic</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
      </div>
  
    <form action="https://softuni.id/admin/course/payment/34c8aa0f-4af2-11ee-89c8-005056470331/f2b65422-adca-11ed-9446-005056470331" method="POST" class="mx-3">
                                            <input type="hidden" name="s0ftun1.1d" value="87ec450ac3e2beb1e67e5b6b6923e2de" />                                            <div class="form-group">
                                                <label class="add-course-label">Keterangan</label>
                                                <input name="title" value="test" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Nominal</label>
                                                <input name="nominal" value="10000" type="number" class="form-control" placeholder="Ketikkan Nominal">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Hari</label>
                                                <input name="day" value="2023" type="date" class="form-control" placeholder="Ketikkan Hari" required>
                                                <small class="text-danger"></small>
                                            </div>
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/course/payment/34c8aa0f-4af2-11ee-89c8-005056470331/f2b65422-adca-11ed-9446-005056470331/delete')" type="submit" class="btn btn-outline-secondary" ><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                         
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>











