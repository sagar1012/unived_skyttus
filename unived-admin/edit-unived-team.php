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
						<h1>Edit Unived Team</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 edit-unived-team">
						<label>Team Image</label>
						<input type="file" name="">
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 edit-unived-team">
						<label>Description of Team</label>
						<textarea rows="4" placeholder="Team Description"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 edit-unived-team">
						<a href="#"><button>Submit</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'include/footer.php';?>