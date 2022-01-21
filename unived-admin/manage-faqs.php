<?php include 'include/header.php';?>
<section id="appointments">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-12 unived-left">
				<?php include 'include/left-col.php';?>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-12 unived-right">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center unived-right-title">
						<h1>Manage FAQs</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-12 manage-content-search">
						<input type="search" name="" placeholder="search">
						<button type="button" name="">Search</button>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-12 text-right add-health-needs">
						<a href="upload-content.php"><button>+ Add New FAQs</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 manage-content ">
						<table class="table">
						  <thead class="thead-light">
						    <tr>
						      <th scope="col" width="10%">Sr. No.</th>
						      <th scope="col" width="70%">Questions</th>
						      <th scope="col" width="10%">Edit</th>
						      <th scope="col" width="10%">Delete</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th width="10%">01</th>
						      <td width="30%">Why Vegan?</td>
						      <td width="10%"><i class="ri-edit-box-line"></i></td>
						      <td width="10%"><i class="ri-delete-bin-line"></i></td>
						    </tr>
						    <tr>
						      <th width="10%">01</th>
						      <td width="30%">FSSAI</td>
						      <td width="10%"><i class="ri-edit-box-line"></i></td>
						      <td width="10%"><i class="ri-delete-bin-line"></i></td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12">
						<nav aria-label="Page navigation example">
						  <ul class="pagination justify-content-end">
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1">Previous</a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item active"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next</a>
						    </li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'include/footer.php';?>