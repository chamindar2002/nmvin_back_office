<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*Main Menu End*/
/*#body_warp {
	position:absolute;
	left:-500px;
	top:0px;
	width:1000px;
	height:600px;
	z-index:10;
	margin-left: 50%;
}*/
.txt_area{
	width:250px;
	height::32px;
	}
.txt_bold {
	font-weight: bold;
}
.txtfield {
	font-family:sans-serif;
	font-size:12px;
}
/*#nav_1, #nav_1 ul{
	margin:0;
	padding:0;
	list-style-type:none;
	list-style-position:outside;
	position: 0px;
	line-height:30px;
}

#nav_1 a{
	display:block;
	padding:0px 10px;
	color:#000;
	text-decoration:none;
	-moz-border-radius: 5px;
	border-radius: 3px;
	background-color: #FFF;
}

#nav_1 a:hover{
	background-color:#09F;
	 [disabled]color:#ED3581; 
	-moz-border-radius: 5px;
	border-radius: 3px;
	border-color: #CCC;
}

#nav_1 li{
	float:left;
	position:relative;
	padding:5px 5px;
}

#nav_1 ul {
position:absolute;
display:none;
width:30px;
top:30px;
}

#nav_1 li ul a{
width:20em;
height:auto;
float:left;
}

#nav_1 ul ul{
top:auto;
}	

#nav_1 li ul ul {
left:20em;
margin:0px 0 0 10px;
}

#nav_1 li:hover ul ul, #nav_1 li:hover ul ul ul, #nav_1 li:hover ul ul ul ul{
display:none;
}
#nav_1 li:hover ul, #nav_1 li li:hover ul, #nav_1 li li li:hover ul, #nav_1 li li li li:hover ul{
display:block;
}

#main_mnu {
	position:absolute;
	left:290px;
	top:5px;
	width:681px;
	height:40px;
	z-index:12;
	-moz-border-radius: 5px;
	border-radius: 3px;
	background-color: #FFFFFF;
}

#content{
   
    margin-top: 120px;
    margin-left: 12px;
    z-index:-1;
}*/
</style>
</head>
<div id="body_warp">
<div id="main_mnu">
<!--    <ul id="nav_1" name="nav_1">
      <li><a href="#">Home</a></li>
      <li><a href="#">My Details</a></li>
      <li><a href="#">My Payments</a></li>
      <li><a href="#">House Progress</a></li>
      <li><a href="#">Change Login Info</a></li>
    </ul>-->
  </div>
<!--  <div id="logo"></div>-->
  
  <div id='content'>

      <?php
      //echo "XXXX";
      include 'includefiles/newcustomerForm.php';
      ?>
  </div>
  
</div>

<div id="shading"></div>



</body>
</html>
