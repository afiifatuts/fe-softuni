
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Url Kursus</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
      <li class="breadcrumb-item active"> Url Kursus</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
      <div class="mx-5">
      <h5 >Tambah Url</h5>
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
      <form class="ml-lg-5" action="https://softuni.id/admin/course/thankyou-message/f2b65422-adca-11ed-9446-005056470331" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="ca0fcba6c6440064b33038e7ceab6f73" />
                                            <div class="form-group">
                                                <label class="add-course-label">Link Grup</label>
                                                <input name="group_link" value="" type="text" class="form-control" placeholder="Ketikkan Link Grup" required>
                                                <small class="text-danger"></small>
                                            </div>

                                            <div class="form-group">
                                                <label class="add-course-label">Message</label>
                                                <textarea id="tiny" name="welcome_message"></textarea>
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


