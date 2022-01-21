<?php include 'include/header.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<section id="appointments">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-12 unived-left">
				<?php include 'include/left-col.php';?>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-12 unived-right">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center unived-right-title">
						<h1>Add Manage Our Team</h1>
					</div>
				</div>
				<div class="upload-content-main">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<label>Name</label>
							<input type="text" name="" placeholder="Name Of Member">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<label>Position</label>
							<input type="text" name="" placeholder="Name Of Member">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<label>Joining Date</label>
							<input type="date" name="" placeholder="Select date">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12n">
							<label>Upload Photograph</label>
							<input type="file" name="">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<label>Short Description</label>
							<textarea rows="5" placeholder="Add short description"></textarea>
						</div>
					</div>
					<div class="row">
						 <div class="col-xl-12 col-lg-12 col-md-12 col-12 add-manage-our-team-textarea">
						 	<label>About Joining Date</label>
						 	<textarea id="summernote"></textarea>
						 </div>
					</div>
					<div class="row">
						 <div class="col-xl-12 col-lg-12 col-md-12 col-12 add-manage-our-team-textarea">
						 	<label>About My story</label>
						 	<textarea id="summernote"></textarea>
						 </div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12 upload-content-submit">
							<a href="#"><button>Submit</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <script type="text/javascript" src="js/texteditor.js"></script> -->
<script type="text/javascript">
	$('textarea#summernote').summernote({
        // placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
</script>
<?php include 'include/footer.php';?>