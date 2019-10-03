<?php
require 'connect.php';
$conn    = Connect();
include('session.php');
$test = "";
$par = "";
$par2 = "";

   
   if (isset($_POST['get_details'])) {
		if($_POST['start'] != null){
			$par = $_POST['start'];
		}
		if($_POST['end'] != null){
			$par2 = $_POST['end'];
		}
		$test = exec("python test.py $par $par2");
	}
?>
<?php
$test1 = "";
	
	if (isset($_POST['update']))
{	
    $test = exec('python test2.py ');
}
?>
<html>
	<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="css/index.css"> 
    </head>
	<body style = 'padding-right: 0px;'>
			
		<div id="mainfield">
			<div class="row" style="margin-right:0px;margin-left:0px">
			
				<div id='sides' class="col-md-3">
				
				</div>
				<div id='main' class="col-md-6 col-md-offset-0" style = 'padding-right: 0px;padding-left: 0px;'>
					<div class="contain">
						<form id='chardiv' action="" method="post" enctype="multipart/form-data">
							<input type="date" id="start" name="start">
							<input type="date" id="end" name="end">
							<input type="submit" name="get_details" value="get costs">
						</form>
						<form name="update" method="post" >
							<button name = "update" type="submit"> Predict Cost next month </button>
						</form>
						<?php
							echo '<p>' . $test . '</p>';
						?>
					</div>
				
				
				</div>
				
				<div id='sides' class="col-md-3 col-md-offset" style="overflow:hidden;">
				
				
				</div>
			</div>


		</div>
	</body>
</html>
