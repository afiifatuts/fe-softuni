
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<div class="main-admin " style="min-height:80vh;">
<div class="pagetitle mb-4 container">
    <h2>Edit Topic</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-kursus.php">Kursus</a></li>
    <li class="breadcrumb-item"><a href="admin-kursus-topic.php">Topic Kursus</a></li>
      <li class="breadcrumb-item active"> Edit Topic</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
  <div class="row">
    <div class="card col-lg-11 ml-3 py-5 col-lg-11 ">
      <div class="mx-5">
      <h5 >Edit Topic</h5>
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
      <form class="ml-lg-5" action="https://softuni.id/admin/course/course-topic/047066d5-5a99-11ed-aaa6-005056470331/a93b0bd6-5352-11ed-98f3-e82a44eb9daf" method="POST">
                                            <input type="hidden" name="s0ftun1.1d" value="50272488eda8c932495aa869cd3b5fc0" />                                            <div class="form-group">
                                                <label class="add-course-label">Nama Topic</label>
                                                <input name="topic" value="Pengenalan Programming" type="text" class="form-control" placeholder="Ketikkan Nama Kursus" required>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Deskripsi</label>
                                                <textarea id="tiny" name="description">&lt;div class=&quot;qodef-e-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active&quot;&gt;
&lt;div class=&quot;qodef-e-content-inner&quot;&gt;
&lt;ul&gt;
&lt;li&gt;Pengenalan&lt;/li&gt;
&lt;li&gt;Break&lt;/li&gt;
&lt;li&gt;First steps in programming&lt;/li&gt;
&lt;li&gt;Break&lt;/li&gt;
&lt;li&gt;First steps in programming&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</textarea>
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Urutan</label>
                                                <input name="sequence" value="1" type="number" class="form-control" placeholder="Ketikkan Urutan">
                                                <small class="text-danger"></small>
                                            </div>
                                          
                                                <button type="submit" class="btn btn-primary"><i class=" fas fa-save" style="margin-right: 10px;"></i> Simpan</button>
                                                <a onclick="confirmPopUp('https://softuni.id/admin/course/course-topic/047066d5-5a99-11ed-aaa6-005056470331/a93b0bd6-5352-11ed-98f3-e82a44eb9daf/delete')" type="submit" class="btn " style="background: #f1f1f1; border"><i class=" fas fa-trash" style="margin-right: 10px;"></i> Hapus</a>
                                    
                                        </form>
    </div>
  </div>
</section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>

<?php include './partial/footer.php'; ?>



