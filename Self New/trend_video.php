<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Trending...</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>


<meta id="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.trend{
	color:#FF0000;
}
.chip {
	display: inline-block;
	padding: 0 25px;
	height: auto;
	font-size: 16px;
	line-height: 50px;
	border-radius: 25px;
	background-color: #f1f1f1;
}
.chip img {
	float: left;
	margin: 0 10px 0 -20px;
	height: 50px;
	width: 50px;
	border-radius: 50%;
}
.blue {
	color: #0066FF;
}

</style>

<body style="background-color:#CCCCCC">

<?php
	include("header.php");
?>
<div id="up" class="list-group-item row" style="padding: 0px; margin: 0px; margin-bottom: 0px; margin-top: 0px;; width: 100%">
	<a href="trend.php"><div class="chip col-xs-6 col-md-6 text-center">
		<i class="fa fa-image img-circle"  style="font-size:20px">&nbsp;Photos </i>
		&nbsp;
</div></a>
<a href="trend_video.php"><div class="chip col-xs-6 col-md-6 text-center">
		<i class="fa fa-video-camera"  height="96" style="font-size:20px">&nbsp;Videos</i>
		&nbsp;
</div></a>

</div>
<div class="list-group-item tab_container-fluid" style="padding: 0px; margin: 0px; margin-bottom: 0px; margin-top: 5px;; width: 100%">
	<div class="chip">
		<img alt="Person" height="96" src="icon.png" width="96"> <span>
		<a href="#profile_view">Amit Dagar</a>&nbsp;
		<i class="fa fa-globe" style="font-size: 14px;"></i>&nbsp;
		<i class="fa fa-circle" style="font-size: 4px;"></i>&nbsp;
		<a href="signin.php">Follow</a> </span>
		<span><font color="#FF0000">#01.Trending...</font></span>
		</div>
	<!--google Ads Area
	<tr class="list-group-item" style="padding:0px;margin:0px;">
	<td></td>
	</tr>!-->
	<!--Text/Status Area
	<tr class="list-group-item" style="padding:0px;margin:0px;">
	<td></td>
	</tr>!-->
	<script>
	$(document).ready(function(){
	$("#like-vi").click(function(){
	$("#like-vi").toggleClass("blue");
    });
});	
</script>
<script>
	$(document).ready(function(){
	$("#flag-vi").click(function(){
	$("#flag-vi").toggleClass("blue");
    });
});	
</script>

	<div class="text-center" style="margin-top: 0px; margin-bottom: 0px; width: 100%; padding: 10px;">
		<div>
			<video class="" controls="" poster="download.jpg" style="width: 100%;height:auto">
			<source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
			<source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
			</video></div>
	</div>
	<div class="text-center row" style="color: #999999; font-size: 24px; padding-left: 0px; padding-right: 0px; padding-top: 3px; padding-bottom: 3px;; margin: 0px;">
		<a href="signin.php" style="color: 999999"><div>
			<i id="like-vi" class="fa fa-thumbs-o-up col-xs-3 col-md-3" style="padding-right: 40px">&nbsp;<font size="2px">200</font>
			</i></div></a>
		<a href="signin.php" style="color: 999999"><div>
			<i id="cmnt-vi" class="fa fa-comment-o col-xs-3 col-md-3" style="padding-right: 40px">&nbsp;<font size="2px">200</font>
			</i></div></a>
		<a href="signin.php" style="color: 999999">
			<div>
				<i id="flag" class="fa fa-flag-o col-xs-3 col-md-3" style="padding-right: 40px">&nbsp;<font size="2px">4</font></i></div></a>
			<div>
			<i class="fa fa-paper-plane-o col-xs-3 col-md-3"></i></div>
	</div>
	
</div>

<br><br>
</body>

</html>
