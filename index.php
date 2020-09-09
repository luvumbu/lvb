<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head id="head">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bokonzi</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">

<body id="body">
	<?php
	include("link/app.php");
	?>
 
 <style>
	 a {
		 text-decoration: none;
		 color:black;
	 }
	 .section_all_3{
		 display: flex;
		 width: 70%;
		 margin: auto;
		 justify-content: space-between;
		 
		 height: 200px;
	 }
	 .section_all_3_img img {
		 width: 400px;
	 
	 }
	 .section_all_3_img {
		 text-align: center;
	 }
	 figcaption {
		text-align: center;
	 }













	 @media screen and (max-width: 1280px) {

 
.section_all_3{
	display: block; 
}





}
 </style>
</body>

</html>