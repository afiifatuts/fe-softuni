
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container mb-3">
    <h2>Kontak</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item active">Kontak</li>
    
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container dashboard mb-5">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-11">
    <div>
      <h2 class="mb-3" > Kontak List</h2>
      </div>
              <div class="card-body">

              <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
      <thead>
              <tr>
                <th scope="col"><p>No</p></th>
                <th scope="col"><p>Email</p></th>
                <th scope="col"><p>Nama</p></th>
                <th scope="col"><p>Telepon</p></th>
                <th scope="col"><p>Waktu</p></th>
                <th scope="col"><p>Action</p></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><p>1</p></td>
                <td><p>test@gmail.com</p></td>
                <td><p>test</p></td>
                <td><p>0812344213</p></td>
                <td><p>2023-10-11</p></td>
                <td>   <a href="admin-kontak-detail.php" class="btn btn-secondary"> Lihat Detail</a> </td>
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


