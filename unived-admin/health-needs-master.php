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
						<h1>Health Needs Master</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-right add-health-needs">
						<button data-toggle="modal" data-target="#add-health-needs">+ Add Health Needs</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 unived-right-table-login">
						<table class="table">
						  <thead class="thead-light">
						    <tr>
						      <th scope="col" width="10%">Sr. No.</th>
						      <th scope="col" width="70%">Category Name</th>
						      <th scope="col" width="10%">Edit</th>
						      <th scope="col" width="10%">Delete</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th width="10%">01</th>
						      <td width="70%"><a href="#">Fitness</a></td>
						      <td width="10%"><i class="ri-edit-box-line"></i></td>
						      <td width="10%"><i class="ri-delete-bin-line"></i></td>
						    </tr>
						    <tr>
						      <th width="10%">01</th>
						      <td width="70%"><a href="#">Fitness</a></td>
						      <td width="10%"><i class="ri-edit-box-line"></i></td>
						      <td width="10%"><i class="ri-delete-bin-line"></i></td>
						    </tr>
						    <tr>
						      <th width="10%">01</th>
						      <td width="70%"><a href="#">Fitness</a></td>
						      <td width="10%"><i class="ri-edit-box-line"></i></td>
						      <td width="10%"><i class="ri-delete-bin-line"></i></td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="modal fade" id="add-health-needs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row add-health-needs-popup">
        	<div class="col-xl-4 col-lg-4 col-md-4 col-12">
        		<h6>Health Needs</h6>
        	</div>
        	<div class="col-xl-8 col-lg-8 col-md-8 col-12">
        		<input type="text" name="" placeholder="Add Health Needs">
        	</div>
        </div>
        <div class="row add-health-needs-popup">
        	<div class="col-xl-4 col-lg-4 col-md-4 col-12">
        		<h6>Related to</h6>
        	</div>
        	<div class="col-xl-8 col-lg-8 col-md-8 col-12">
        		<div class="row">
        			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
        				<input type="checkbox" name="">
        				<label>Men</label>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
        				<input type="checkbox" name="">
        				<label>Women</label>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
        				<input type="checkbox" name="">
        				<label>Kids</label>
        			</div>
        			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
        				<input type="checkbox" name="">
        				<label>Senior</label>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php';?>