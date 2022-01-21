<?php include 'include/header.php';?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
<section id="appointments">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-12 unived-left">
				<?php include 'include/left-col.php';?>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-12 unived-right">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center unived-right-title">
						<h1>Add Quiz</h1>
					</div>
				</div>
				<div class="row add-quiz-div">
					<div class="col-xl-2 col-lg-2 col-md-2 col-12">
						<h5>Name of Quiz</h5>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-12">
						<input type="text" name="" placeholder="">
					</div>
				</div>
				<div class="row add-quiz-div">
					<div class="col-xl-2 col-lg-2 col-md-2 col-12">
						<h5>Image of Quiz</h5>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-12">
						<input type="file" name="">
					</div>
				</div>
				<div class="row add-quiz-div">
					<div class="col-xl-2 col-lg-2 col-md-2 col-12">
						<h5>Catagory</h5>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-12">
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
				<div class="row add-quiz-div">
					<div class="col-xl-2 col-lg-2 col-md-2 col-12">
						<h5>Quiz Description</h5>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-12">
						<textarea rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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