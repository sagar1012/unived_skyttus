<?php include 'include/header.php';?>
<link rel="stylesheet" type="text/css" href="css/texteditor.css">
<section id="appointments">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-12 unived-left">
				<?php include 'include/left-col.php';?>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-12 unived-right">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center unived-right-title">
						<h1>Manage Our story</h1>
					</div>
				</div>
				<div class="upload-content-main">
					<div class="row">
						 <div class="col-xl-12 col-lg-12 col-md-12 col-12 content-description-my-textarea">
						 	<label>Content Description</label>
						 	<div id="editor"></div>
						 </div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12 upload-content-submit">
							<a href="#"><button>Edit</button></a>
							<a href="#"><button>Save</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="add-personal-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content add-personal-detail">
      <div class="modal-body">
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label>Location</label>
        		<input type="text" name="" placeholder="Add Location">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label>DOB</label>
        		<input type="date" name="">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label><img src="images/facebook.svg"></label>
        		<input type="text" name="" placeholder="Link of FB page">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label><img src="images/twitter.svg"></label>
        		<input type="text" name="" placeholder="Link of Twitter Page">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label><img src="images/instagram.svg"></label>
        		<input type="text" name="" placeholder="Link of Instagram Account">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 add-personal-detail">
        		<label><img src="images/webiste.svg"></label>
        		<input type="text" name="" placeholder="URL of webiste">
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="">Save</button>
        <button type="button" class="" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/texteditor.js"></script>
<?php include 'include/footer.php';?>