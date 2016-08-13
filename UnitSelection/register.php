<!DOCTYPE html>
<?php
if (isset($_GET['submit'])) {
if(!ctype_digit($_POST['username']) and filter_var($_POST['id'], FILTER_VALIDATE_INT) and filter_var($_POST['password'], FILTER_VALIDATE_INT)) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "select_units";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sSQL = 'SET CHARACTER SET utf8';
    mysqli_query($conn, $sSQL)
    or die ('Can\'t charset in DataBase');
    if ($_POST['field'] == "ریاضیات و کاربردها" or $_POST['field'] == "علوم کامپیوتر") {
        $sql = "INSERT INTO student (name, std_id,password,field,being_id)
    VALUES('$_POST[username]','$_POST[id]','$_POST[password]','$_POST[field]',1)";
    }
    if ($_POST['field'] == "مهندسی کامپیوتر" or $_POST['field'] == "مهندسی فناوری اطلاعات") {
        $sql = "INSERT INTO student (name, std_id,password,field,being_id)
    VALUES('$_POST[username]','$_POST[id]','$_POST[password]','$_POST[field]',2)";
    }
    if ($conn->query($sql) === TRUE) {
        header('Location: registered.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else {
if(ctype_digit($_POST['username'])){
?>
<script>
    $(document).ready(function () {
        $("#notification1").css('visibility', 'visible');
    });
</script>
<?php
}
if (!filter_var($_POST['id'], FILTER_VALIDATE_INT)){
    ?>
    <script>
        $(document).ready(function () {
            $("#notification2").css('visibility', 'visible');
        });
    </script>
    <?php
}
if(!filter_var($_POST['password'], FILTER_VALIDATE_INT)){
    ?>
    <script>
        $(document).ready(function () {
            $("#notification3").css('visibility', 'visible');
        });
    </script>
    <?php
}
}
}
?>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Amirkabir University of Technology - Tehran Polytechnic</title>
    <link rel="icon" href="aut.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        * {
            direction: rtl;
            font-family: "B Koodak";
        }
        .header {
            background: url("aut_bg_2.png");
            background-repeat: no-repeat;
            background-position: top;
            background-color: #010176;
            height: 200px;
        }
        #title{
            float: right;
            margin-top: 50px;
            margin-right: 100px;
        }
        #mission {
            float: left;
            margin-top: 70px;
            margin-left: 250px;
        }
        .content {
            height: 417px;
            background: url("middle.png");
            background-repeat: no-repeat;
            background-position: center;
            overflow: auto;
            width: 100%;
        }
        .footer {
            background: url("aut_bg_2.png");
            background-repeat: no-repeat;
            background-position: bottom;
            background-color: #010176;
            height: 200px;
        }
        h2,h4,form {
            text-align: center;
            position:relative;

        }
        input[type="submit"] {
            padding:2px 10px;
            background-color: #86d0ff;
            border-color: #aeeeff;
            border-radius: 10%;
            color: #010176;
            font-size: 20px;
            display:inline-block;
        }
        .arrow_box {
            display: inline;
            position: relative;
            background: #fa9b9b;
            border: 2px solid #f55151;
            border-radius: 10%;
            padding: 5px 10px;
        }
        .arrow_box:after, .arrow_box:before {
            left: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .arrow_box:after {
            border-color: rgba(250, 155, 155, 0);
            border-left-color: #fa9b9b;
            border-width: 5px;
            margin-top: -5px;
        }
        .arrow_box:before {
            border-color: rgba(245, 81, 81, 0);
            border-left-color: #f55151;
            border-width: 8px;
            margin-top: -8px;
        }
        #notification1,#notification2 ,#notification3 {
            display: inline;
            width: 170px;
            position:absolute;
            left:25%;
            text-align: left;
            visibility: hidden;
        }
        @media only screen and (max-width: 768px) {
            #notification1,#notification2 ,#notification3 {
                left:0;
            }
            #mission {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <img src="title.png" id="title">
    <img src="mission.png" id="mission">
</div>
<div class="content">
    <h2>به دانشگاه صنعتی امیرکبیر خیلی خوش آمدید</h2>
    <h4>جهت ثبت نام فرم زیر را کامل نمایید.</h4>
    <form action="?submit=1" method="post">
        نام و نام خانوادگی :
        <input type="text" name="username" style="margin-right: 1px" id="name"><div class="arrow_box" id="notification1">اطلاعات وارد شده نامعتبر است.</div><br><br>
        شماره دانشجویی :
        <input type="text" name="id" style="margin-right: 7px" id="id" ><div class="arrow_box" id="notification2">اطلاعات وارد شده نامعتبر است.</div><br><br>
       کد ملی :
        <input type="text" name="password" style="margin-right: 59px" id="pass" ><div class="arrow_box" id="notification3">اطلاعات وارد شده نامعتبر است.</div><br><br>
        رشته تحصیلی :
        <select name="field" style="margin-right: 23px;width: 153px">
            <option selected disabled hidden></option>
            <option value="ریاضیات و کاربردها">ریاضیات و کاربردها</option>
            <option value="علوم کامپیوتر">علوم کامپیوتر</option>
            <option value="مهندسی کامپیوتر">مهندسی کامپیوتر</option>
            <option value="مهندسی فناوری اطلاعات">مهندسی فناوری اطلاعات</option>
        </select><br><br>
        <input type="submit" value="ثبت نام">
    </form>
</div>
<div class="footer"></div>
</body>
</html>
