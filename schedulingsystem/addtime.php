<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will Assign your Return Dates 
				<form class="form-horizontal" method= "post" action="add.time.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Set Dates</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="starttime">Earliest Date</label>  
				  <div class="col-md-5">
				  <input id="starttime" name="starttime" type="date" class="form-control input-md" required>

					<script>
					var today = new Date().toISOString().split('T')[0];
					document.getElementById('starttime').setAttribute('min', today);
					</script>
					
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="endtime">Latest date</label>  
				  <div class="col-md-5">
				  <input id="starttime" name="endtime" type="date" class="form-control input-md" required>

					<script>
					var today = new Date().toISOString().split('T')[0];
					document.getElementById('starttime').setAttribute('min', today);
					</script>
					
				  </div>
				</div>

				
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-success">Save</button>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>