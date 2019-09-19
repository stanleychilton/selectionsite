<?php
require 'connect.php';
$conn    = Connect();

?>
<!DOCTYPE html>
<html lang="en" style = 'padding-right: 0px;'>
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
						<?php
							for($i=0;$i<=10;$i++){
								echo"<div class='row round3'><div id='sides' class='col-md-6'>";
								echo"instance-".($i+1)."</div>";
								echo"<div id='sides' class='col-md-6'><button class='button1'>select</button>";
								echo"</div></div>";
							}

						?>
					</div>
				
				
                </div>
				
				<div id='sides' class="col-md-3 col-md-offset" style="overflow:hidden;">
				
				
				</div>
				</div>
    
	
			</div>
    </body>
</html>