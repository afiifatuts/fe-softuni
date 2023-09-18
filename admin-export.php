
<?php include './partial/header.php'; ?>
<?php include './partial/sidebar.php'; ?>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


<div class="main-admin" style="min-height:80vh;">
<div class="pagetitle container-fluid mb-3">
    <h2>Export</h2>
    <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item active">Export</li>
    
    </ol>
  </nav>
  </div><!-- End Page Title -->


  
  <!-- Kursus card  -->
  <section class="container-fluid">
    <div class="row">
    <div class="card p-5 ml-3 col-lg-12">
    <div>
      <h2 class="mb-3" >Data User</h2>
      </div>
              <div class="card-body">

              <!-- Datatable  -->
                <table
        id="datatable"
        class="table table-striped"
      >
      <thead>
              <tr>
                <th scope="col"><p>Id</p></th>
                <th scope="col"><p>Email</p></th>
                <th scope="col"><p>Nama Lengkap</p></th>
                <th scope="col"><p>Password</p></th>
                <th scope="col"><p>Tanggal Lahir</p></th>
                <th scope="col"><p>Jenis Kelamin</p></th>
                <th scope="col"><p>Pendidikan Terakhir</p></th>
                <th scope="col"><p>Alamat</p></th>
                <th scope="col"><p>Role</p></th>
                <th scope="col"><p>Nomor Telepon</p></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><p>1sruyeryg</p></td>
                <td><p>test@gmail.com</p></td>
                <td><p>Kevin Anderson</p></td>
                <td><p>afdsafdsaf</p></td>
                <td><p>11 November 1994</p></td>
                <td><p>Laki-laki</p></td>
                <td><p>S1</p></td>
                <td><p>Jakarta</p></td>
                <td><p>Member</p></td>
                <td><p>08627362736</p></td>
             </tr>
              

             <a onclick="ExportToExcel('xlsx')" class="btn btn-primary mb-3" >Export Data </a>
          
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

<script>

function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('datatable');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('DataUserSoftUni.' + (type || 'xlsx')));
}

</script>


<?php include './partial/footer.php'; ?>


