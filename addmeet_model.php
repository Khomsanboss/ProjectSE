<?php
	include('conn.php');
	
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	
	$file=$_FILES['meetfile'];
	$filename=$_FILES["meetfile"]["name"];
	$filTmpename= $_FILES["meetfile"]["tmp_name"];
	$fileExt= explode(".",$filename);
	$fileAcExt= strtolower(end($fileExt));
	$newFilename= time() . "." . $fileAcExt;
	$fileDes= 'upload/'.$newFilename;
	move_uploaded_file($filTmpename,$fileDes);
	$meetfile=$fileDes;

	mysqli_query($conn,"insert into meeting (title,head,numattend,roomid,start,end,meetfile) values ('$title','$head','$numattend','$roomid','$start','$end','$meetfile')");
	header('location:addmeet.php');


?>