<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Video Library</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>

<meta id="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.setting{
	color: #FF0000;
}
#user_video{
		border-bottom:2px solid #003399;
}
a{
	text-decoration:none;
}
</style>
<body style="background-color: #CCCCCC">

<?php
	include("header.php");
?>
<?php 
include("profile_header.php");
?>
<div class="list-group-item text-center">
<a href="download.jpg" target="_blank">
<video class="img-thumbnail" controls="" poster="download.jpg" style="height:130px;width:150px;">
			<source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
			<source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
			</video></a>
<a href="download.jpg" target="_blank">
<video class="img-thumbnail" controls="" poster="download.jpg" style="height:130px;width:150px;">
			<source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
			<source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
			</video></a>
<a href="download.jpg" target="_blank">
<video class="img-thumbnail" controls="" poster="download.jpg" style="height:130px;width:150px;">
			<source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
			<source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
			</video></a>
</div>

</body>

</html>
