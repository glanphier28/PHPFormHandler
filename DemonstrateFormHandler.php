<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<style>
	body {
		background-color: #002B5C;
	}
	h1,h2 {
		text-align:center;
	}
	#postData {
		color: #002B5C;
		font-style: italic;
	}

</style>
</head>

<body>
	<br>
	<div class="container bg-white rounded">
		<div class="row">
		<h1>WDV101 Intro HTML and CSS</h1>
		<h2>UNIT 3 Forms - Lesson 2 Server Side Processes</h2>
		<br>
		
			<div class="col-sm">
			</div>
	   		<div class="col-lg-10">
			   <br>
				<p>Dear <span id="postData"> <?php echo $_POST['first_name']?></span>, </p>
				<p>Thank you for your interest in DMACC.</p>
				<p>We have you listed as a(n) <span id="postData"> <?php echo $_POST['academic_standing']?></span> starting this fall.</p>
				<p>You have declared <span id="postData"><?php echo $_POST['major'] ?></span> as your major.</p>
				<p>Based on your responses we  will provide the following information in our confirmation email to you at <span id="postData"><?php echo $_POST['student_email']?></span>.</p>
				<p>
					Please contact me with program information:
					<span id="postData">
					 <?php 
						echo $_POST['contact_program_information'];
					 ?> 
					</span>
				</p>
				<p>
					I would like to contact a program advisor: 
					<span id="postData">
						<?php 
						echo $_POST['contact_program_advisor'];
						?> 
					</span>
				</p>
					

				<p>
					You have shared the following comments in which we will review:
					<br>
					<span id="postData">
						<?php 
	
						echo $_POST['commentBox'];
						?>
					</span>
				</p>
				<br>
			</div>
			<div class="col-sm">
			</div>
		</div>
	</div>
</body>
</html>
