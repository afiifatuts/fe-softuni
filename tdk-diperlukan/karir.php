<?php include 'partial/header.php'; ?>
<style>
        .career-item {
            display: flex;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .career-item img {
            max-width: 100%;
        }
    </style>



<section class="container mt-5">
    <h2>Peluang Karir Kami</h2>


    <div class="table-responsive pt-5">
				<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
					<thead>
						<tr>
							<th class="min-w-150px">Lowongan Pekerjaan</th>
							<th class="min-w-150px">Tipe / Jenis</th>
							<th class="min-w-100px">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class=" col-md-20 h-15px">lowongan 1 </div>
							</td>
							<td class="text-end">
								<div class=" col-md-10 h-20px">Full time</div>
							</td>
							<td>
								<div class="col-md-6 h-30px">
                                    <a class="btn btn btn-outline-warning" href="karir-detail.php">Detail<i class="fas fa-arrow-right  ml-2"></i></a>
                                </div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

</section>


<?php include 'partial/footer.php'; ?>