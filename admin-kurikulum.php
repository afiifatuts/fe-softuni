
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3">
    <h2>Kurikulum</h2>
    <nav>
    <ol class="breadcrumb">
     <li class="breadcrumb-item active"> Kurikulum</li>
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
              <div class="card-body">
              <h5 class="card-title">Kurikulum</h5>
            <a href="admin-kurikulum-add.php"> <button class="btn btn-primary mb-3" >Tambah</button></a> 
  <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
      <thead>
                  <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td><img src="assets/curriculum_image/0a62546a-5b58-11ed-bef8-e82a44eb9daf.png" style="width:80px;"></td>
                    <td>Java Developer</td>
                    <td>
                    <a href="admin-kurikulum-edit.php"><button class="btn btn-secondary"> Edit</button></a>
                    <a href="admin-kurikulum-banner.php"><button class="btn btn-danger"> Banner</button></a>
                    <a href="admin-kurikulum-topic.php"><button class="btn btn-success"> Topic</button></a>
                    </td>
                  </tr>
                </tbody>
      </table>








            
                <!-- End Default Table Example -->
              </div>
            </div>
  </section>



  
 <!-- End mainAdmin -->
</div>
<!-- End  -->
</div>


<?php include './partial/footer.php'; ?>
