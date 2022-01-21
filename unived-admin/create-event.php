<?php include 'include/header.php';?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
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
						<h1>Create Event</h1>
					</div>
				</div>
				<div class="upload-content-main">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<label>Name of Event</label>
							<input type="text" name="" placeholder="Name of Event">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12n">
							<label>Image of Event</label>
							<input type="file" name="">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">
							<label>Is event free of cost ?</label>
							<ul>
								<li><input type="radio" name="">Yes</li>
								<li><input type="radio" name="">No</li>
							</ul>
						</div>
						<div class="col-xl-8 col-lg-7 col-md-7 col-12">
							<label>Fees</label>
							<input type="text" name="" placeholder="Fees">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">
							<label>Event  Date</label>
							<input type="date" name="" placeholder="select date">
						</div>
						<div class="col-xl-8 col-lg-7 col-md-7 col-12">
							<label>Time</label>
							<input type="time" name="" placeholder="select time">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">
							<label>Location</label>
							<input type="text" name="" placeholder="Enter Location">
						</div>
						<div class="col-xl-8 col-lg-7 col-md-7 col-12">
							<label>Host</label>
							<input type="text" name="" placeholder="Define Host Name">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-12n">
							<label>Category</label>
							<select name="skills" multiple="" class="label ui selection fluid dropdown">
						      <option value="">All</option>
						      <option value="1">Change Methodology</option>
						      <option value="2">Cognitive Computing & AI</option>
						      <option value="3">Connectivity & Collaboration</option>
						      <option value="4">Culture in Action</option>
						      <option value="5">Future of Work</option>
						      <option value="6">HR Transformation</option>
						      <option value="7">Human-centered Design</option>
						      <option value="8">Machine Learning & AI</option>
						      <option value="9">Operational Effectiveness</option>
						      <option value="10">Operational Excellence</option>
						      <option value="11">Organizational Change</option>
						    </select>
						</div>
					</div>
					<div class="row">
						 <div class="col-xl-12 col-lg-12 col-md-12 col-12 content-description-my-textarea">
						 	<label>Content Description</label>
						 	<div id="editor"></div>
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

<div class="modal fade" id="online-links" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content  upload-online-links">
      <div class="modal-body">
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12">
        		<label>Apple Podcast Link</label>
        		<input type="text" name="" placeholder="Apple Podcast Link">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12">
        		<label>Google Podcast</label>
        		<input type="text" name="" placeholder="Google Podcast">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12">
        		<label>Stitcher Podcast Link</label>
        		<input type="text" name="" placeholder="Stitcher Podcast Link">
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="">Save</button>
        <button type="button" class="" data-dismiss="modal">Close</button>
        <button type="button" class="" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/texteditor.js"></script>


<script type="text/javascript">
$('.label.ui.dropdown')
  .dropdown();

$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})

</script>
<?php include 'include/footer.php';?>