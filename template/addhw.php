<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--My CSS-->
    <link rel="stylesheet" href="\assets\style.css">
    <title>Class Management</title>
</head>

<body>

    <!--Header-->
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col-3 headbc">
                <h2>Funny class</h2>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-9 headbc">
                        <h2>Segment</h2>
                    </div>
                    <div class="col">
                        <div class="row align-items-center" id="loginpanel">
                            <div class="col">
                                Your id is : <?php 
                                require "./getdata.php";
                                echo $record[0];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Left bar-->
    <div class="row page menu">
        <div class="col-2 page">
            <h2>Welcome</h2>
            <div class="idblock inner_left_bar">
            <?php
                echo $record[1]." ".$record[2];
            ?>
            </div>
            <hr>
            <a href="\template\main.php" class="inner_left_bar"><button type="button" class="btn btn-secondary menubutton">Home</button></a>
            <hr>
            <a href="\template\member.php" class="inner_left_bar"><button type="button"
                    class="btn btn-secondary menubutton">สมาชิกในห้องของคุณ</button></a>
            <hr>
            <a href="\template\tarang.php" class="inner_left_bar"><button type="button" class="btn btn-secondary menubutton">ตารางสอนของคุณ</button></a>
            <hr>
            <a href="\template\score.php" class="inner_left_bar"><button type="button" class="btn btn-secondary menubutton">คะเเนน</button></a>
            <hr>
            <a href="\template\addhw.php" class="inner_left_bar"><button type="button" class="btn btn-secondary menubutton">เพิ่มการบ้าน</button></a>
            <hr>
            <button type="button" class="btn btn-secondary menubutton">ค้นหา</button>
            <hr>
            <button type="button" class="btn btn-secondary menubutton">ติดต่ออาจารย์</button>
        </div>
        <div class="col" id="blankp">
            <div class="container contentbox" id="headertop">
                <h1>ยินดีด้วย!</h1>
                <h3>คุณยังไม่มีการบ้านตอนนี้</h3>
            </div>
            <div class="container contentbox" id="headerbot">
                <h1>Welcome to Classroom management</h1>
            </div>
        </div>
    </div>



    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>