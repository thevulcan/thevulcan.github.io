<?php 
	$fileWrite = fopen("register.txt","r");
	$data = fread($fileWrite,10000000);

	fclose($fileWrite);
	$answer ="";
	$len = strlen($data);
	$student = 0;
	$sponsor = 0;
	$total = 0;
	for($loop = 0;$loop<$len;$loop++){
		$char = substr($data,$loop,1);
		echo $char;
		if($char == "\n"){
			echo "<br>";
			$total++;
		}
		else if(substr($data,$loop,2) == "*s"){
			$sponsor++;
		}
		else if(substr($data,$loop,2) == "*p"){
			$student++;
		}
		
		
	}
    echo "<br><br><br>";
	echo "Total Students   :".$student."<br>";
	echo "Total Sponsors   :".$sponsor."<br>";
	echo "Total Registered :".$total."<br>";

	

?>