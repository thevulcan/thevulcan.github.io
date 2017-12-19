
<?php
	$emailid = $_POST["emailid"];
	$dropval = $_POST["dropval1"];
	$final = $emailid . " *" . $dropval;
	$fileWrite = fopen("register.txt","a");
	fwrite($fileWrite,$final."\n");
	fclose($fileWrite);
echo '<!doctype html>
<head>
	<title>Polymeet | 2016</title>
</head>
<style type="text/css">
	body{
		background-color:#3b5998;
		background-image:radial-gradient(rgba(255,255,255),rgba(0,0,0));
		font-size:24px;
		color:white;
		width:100vw;
		height:100vh;
		overflow:hidden;
		
		
		
	}
	a{
		color:green;
	}
	img{
		height:300px;
		position:absolute;
		left:50%;
		top:50%;
		transform:translate(-50%,-50%);
	}
</style>
<body>
<h1>Thank you for registering!</h1>
	<h3><a href="downloads/Polymeet%20-%202016%20Back.jpg">Click here to download the files</a></h3>
	<img src="img/logof.png">
	</body>'

?>
