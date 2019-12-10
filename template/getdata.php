<?php
        $hostName="localhost";
        $user="root";
        $pass="";
        $dbName="studentdata";
        $connect=mysqli_connect($hostName, $user, $pass, $dbName) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลนักเรียนได้");
        $sql ="select * from student";

        mysqli_set_charset($connect, "utf8");
        //ใช้งานคำสั่ง sql
        $result=mysqli_query($connect, $sql);
        $record= mysqli_fetch_array($result, MYSQLI_NUM)
?>
