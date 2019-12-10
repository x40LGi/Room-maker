<?php
$con= mysqli_connect("localhost","root","","homework") or die("Error: " . mysqli_error($con));

mysqli_query($con, "SET NAMES 'utf8' ");
 
?>

<?php

	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม มีชื่อวิชา, ประเภท, คะเเนน, คำอธิบาย เเละ เเหล่งอ้างอิง(จะเป็นลิ้งค์ไฟล์หรือเเหล่งข้อมูลก็ได้)
	$subject_name = $_POST["subname"];
	$subject_type = $_POST["type"];
	$score = $_POST["score"];
	$description = $_POST["text"];
	$reference = $_POST["reference"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "insert into hwadd(subname, type, score, text, reference)"."values('$subject_name', '$subject_type', '$score', '$description', '$reference')";

	$result = mysqli_query($con, $sql);
	

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Add homework succesfuly');";
	echo "window.location = 'main.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'main.php'; ";
	echo "alert('Error back to add homework again');";
	echo "</script>";
}
?>