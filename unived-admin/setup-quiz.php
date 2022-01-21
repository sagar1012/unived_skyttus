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
						<h1>Quiz Master</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-right add-health-needs">
						<a href="#" data-toggle="modal" data-target="#add-question"><button>Add Question</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12 quiz-ul-li">
						<h6>1. what is your group? <a href="#">Edit</a></h6>
						<ul>
							<li><input type="radio" name="">10-16</li>
							<li><input type="radio" name="">17-23</li>
							<li><input type="radio" name="">24-29</li>
							<li><input type="radio" name="">30+</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="add-question" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body add-question">
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12">
        		<label>Question</label>
        		<input type="text" name="" placeholder="What is your age group?">
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-5 col-lg-5 col-md-5 col-12">
        		<input type="text" name="" >
        	</div>
        	<div class="col-xl-4 col-lg-4 col-md-4 col-12">
        		<select>
        			<option>Correct</option>
        			<option>Incorrect</option>
        		</select>
        	</div>
        	<div class="col-xl-3 col-lg-3 col-md-3 col-12 add-question-delete">
        		<a href="#"><button>Delete</button></a>
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-5 col-lg-5 col-md-5 col-12">
        		<input type="text" name="" >
        	</div>
        	<div class="col-xl-4 col-lg-4 col-md-4 col-12">
        		<select>
        			<option>Correct</option>
        			<option>Incorrect</option>
        		</select>
        	</div>
        	<div class="col-xl-3 col-lg-3 col-md-3 col-12 add-question-delete">
        		<a href="#"><button>Delete</button></a>
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-5 col-lg-5 col-md-5 col-12">
        		<input type="text" name="" >
        	</div>
        	<div class="col-xl-4 col-lg-4 col-md-4 col-12">
        		<select>
        			<option>Correct</option>
        			<option>Incorrect</option>
        		</select>
        	</div>
        	<div class="col-xl-3 col-lg-3 col-md-3 col-12 add-question-delete">
        		<a href="#"><button>Delete</button></a>
        	</div>
        </div>
        <div class="row">
        	<div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
        		<a href="#" class="add-question-submit"><button>Submit</button></a>
        		<a href="#" class="add-question-add-answer"><button>Add Answer</button></a>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php';?>