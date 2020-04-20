<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title></title>
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
a{
	text-decoration:none;
}
</style>
<body style="background-color: #CCCCCC">

<?php
	include("header.php");
?>
<div class="list-group-item">
	<div class="row" style="font-size: 20px">
		<a href="setting.php">
		<div class="col-xs-1 col-md-1">
			<i class="fa fa-arrow-left"></i></div>
		</a>
		<div class="col-xs-9 col-md-9" style="font-size: 17px">
			Amit Dagar</div>
		<a href="serach.php">
		<div class="col-xs-1 col-md-1" style="color: #808080">
			<i class="fa fa-user-plus"></i></div>
		</a></div>
</div>
<div class="list-group-item">
	<div class="row" style="font-size: 20px;padding-bottom:5px;">
		<div class="col-xs-3 col-md-3"><img src="download.jpg" style="height:60px;width:60px;border-radius:50%"><span style="font-size:11px;color:#003399">Amit Dagar </span></div>
		<div class="col-xs-3 col-md-3 text-center">12<br><span style="font-size:15px;color:#666666">Posts</span></div>
		<div class="col-xs-3 col-md-3 text-center">70M<br><span style="font-size:15px;color:#666666">Followers</span></div>
		<div class="col-xs-3 col-md-3 text-center">5M<br><span style="font-size:15px;color:#666666">Likes</span></div>
	</div>
	<div>
	<a href="user_about.php"><button class="form-control btn btn-default" name="edit_profile" style="color:#999999"><i class="fa fa-pencil" ></i>Edit Your Profile</button></a>
	</div>
</div>
<div class="list-group-item row" style="width:104%;font-size:20px;padding-bottom:0px">
<a href="profile.php"> <div id="profile"   class="col-xs-4 col-md-4 text-center" style="padding-bottom:5px;" ><i class="fa fa-photo"></i></div></a>
<a  href="user_video.php"><div id="user_video" class="col-xs-4 col-md-4 text-center" style="padding-bottom:5px;"><i class="fa fa-video-camera"></i></div></a>
<a href="user_status.php"><div  id="user_status"  class="col-xs-4 col-md-4 text-center"style="padding-bottom:5px;"><i class="fa fa-pencil" ></i></div></a>

</div>
</body>

</html>
