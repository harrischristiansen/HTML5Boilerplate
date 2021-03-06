<?php
$title = "Form";
require($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
	
<!-- Content -->
<main role="main" class="container">
	<div id="msgs"></div>
	<div class="panel panel-default">
		<form method="post" action="/form.html" class="panel-body validate">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="Name" class="form-control" data-bvalidator="required" data-bvalidator-msg="Name Required">
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Email" class="form-control" data-bvalidator="required,email" data-bvalidator-msg="Email Required">
			<br>
			<label for="date">Date</label>
			<input type="text" name="date" id="date" placeholder="Date" class="form-control datepicker" data-bvalidator="required,date[yyyy-mm-dd]" data-bvalidator-msg="Date Required">
			<br>
			<input type="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
</main>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>