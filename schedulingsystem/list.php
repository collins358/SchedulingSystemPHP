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
            <div align="center">
            <legend>List of Organization</legend></fieldset>
			<?php
				include_once("faclist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Type Of Tax</legend></fieldset>
			<?php 
              include_once("corlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of All Taxes</legend></fieldset>
			<?php 
			  include_once("sublist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Assistants</legend></fieldset>
			<?php
				 include_once("roomlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Return Dates </legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>