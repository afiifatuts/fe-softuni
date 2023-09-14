
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin ">
<div class="pagetitle">
    <h2>Kursus</h2>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="section dashboard">
    <div class="row">
    <div class="card col-lg-12 p-5">
              <div class="card-body">
              <a href="admin-kursus-add.php"> <button class="btn btn-primary mb-3" >Tambah Kursus</button></a> 
                <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
        <thead>
          <tr>
          <th>No</th>
                      <th>Gambar</th>
                      <th>Kursus</th>
                      <th>Harga</th>
                      <th>Tanggal Mulai</th>
                      <th>Action</th>
       
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td>1</td>
            <td><img src="assets/img/card.jpg" style="width:150px;"></td>
            <td>Java Beginner</td>
            <td>Rp 0</td>
            <td>10/10/21</td>
            <td>
          <a href="admin-kursus-edit.php" class="btn btn-outline-primary">Edit</a>
                      <a href="admin-kursus-banner.php" class="btn btn-outline-secondary">Banner</a> 
                    <a href="admin-kursus-topic.php" class="btn btn-outline-success">Topic</a>
                      
                      <a href="admin-kursus-url.php" class="btn btn-outline-warning">Url</a> 
                      
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
