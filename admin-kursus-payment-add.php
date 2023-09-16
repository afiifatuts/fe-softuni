
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
      <li class="breadcrumb-item active"> Tambah Payment</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
      <div class="mx-4">
      <h5 >Tambah Payment</h5>
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
    <form action="https://softuni.id/admin/course/payment/insert/f2b65422-adca-11ed-9446-005056470331" method="POST" class="mx-3">
                                            <input type="hidden" name="s0ftun1.1d" value="271417630e62084d8873198327db7a4d" />                                            <div class="form-group">
                                                <label class="add-course-label">Keterangan</label>
                                                <input name="title" value="" type="text" class="form-control" placeholder="Ketikkan Keterangan" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Nominal</label>
                                                <input name="nominal" value="" type="number" class="form-control" placeholder="Ketikkan Nominal">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Hari</label>
                                                <input name="day" value="2023-09-04" type="date" class="form-control" placeholder="Ketikkan Hari" required>
                                                <small class="text-danger"></small>
                                            </div>
                                         
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                           
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>










