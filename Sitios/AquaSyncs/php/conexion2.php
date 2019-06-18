<?php 

	// $con2 = mysqli_connect('localhost','id9841358_niveles','niveles','id9841358_niveles');
	$con2 = mysqli_connect('localhost','root','','niveles');	
    $sql2 = "SELECT * FROM nivel_1 ORDER BY score DESC LIMIT 5";
    $sql3 = "SELECT * FROM nivel_2 ORDER BY score DESC LIMIT 5";
    $sql4 = "SELECT * FROM nivel_3 ORDER BY score DESC LIMIT 5";
    $sql5 = "SELECT * FROM nivel_4 ORDER BY score DESC LIMIT 5";
    $result2 = mysqli_query($con2,$sql2);
    $result3 = mysqli_query($con2,$sql3);
    $result4 = mysqli_query($con2,$sql4);
    $result5 = mysqli_query($con2,$sql5);

 ?>