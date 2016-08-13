<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>انتخاب واحد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: "B Koodak";
        }
        #sun{
            float:right;
            padding-left: 20px;
            padding-right: 20px;
        }
        .header{
            color:#04569A;
            text-align: center;
        }
        .row {
            padding-top: 20px;
        }
        .menu{
            width: 150px;
            float: right;
            margin-left: 20px;
        }
        .menu ul {
            height: 50px;
            list-style: none;
            color:white;
            padding: 0;
            margin: 0;
        }
        .menu li {
            text-align: center;
            float: none;
            background-color: #763b97;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
            border:1px solid #fff102;
            border-left:3px solid #fff102;
            border-right:3px solid #fff102;
            border-collapse: collapse;
        }
        .menu li a {
            text-decoration: none;
            color:white;
        }
        .menu li a:hover {
            -webkit-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
            padding: inherit;
        }
        .content {
            direction: rtl;
            height: 400px;
            background-image: -webkit-gradient(linear,0 0 ,0 100% , from(#aeeeff), to(transparent));
            background-image: -webkit-linear-gradient(#aeeeff,transparent);
            background-image: -moz-linear-gradient(#aeeeff,transparent );
            background-image: -o-linear-gradient(#aeeeff,transparent);
            background-image: linear-gradient(#aeeeff, transparent);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position:right top;
            margin-right: 180px;
            padding: 20px;
        }
        .bot-left {
            position: relative;
            margin-top: 4px;
        }
        .bot-left:before, .bot-left:after {
            content: "";
            position: absolute;
            top: -3px;
            right: -3px;
        }
        .bot-left:before {
            bottom: -3px;
            width: 3px;
            background-image: -webkit-gradient(linear,0 0 ,0 100% , from(#00cd4c), to(transparent));
            background-image: -webkit-linear-gradient(#00cd4c,transparent);
            background-image: -moz-linear-gradient(#00cd4c,transparent );
            background-image: -o-linear-gradient( #00cd4c,transparent);
            background-image: linear-gradient(#00cd4c, transparent);
        }
        .bot-left:after {
            left: -3px;
            height: 3px;
            background-image: -webkit-gradient(linear,100% 0 , 0 0, from(#00cd4c), to(transparent));
            background-image: -webkit-linear-gradient(right, #00cd4c, transparent);
            background-image: -moz-linear-gradient(right, #00cd4c, transparent);
            background-image: -o-linear-gradient(right, #00cd4c, transparent);
        }
        #take ,#physic ,#math ,#english,#religion{
            visibility: hidden;
        }
        #take table, th, td ,#physic table ,th ,td,#math table, th, td,#english table , th , td,#religion table, th ,td{
            border: 2px solid #ffc002;
            border-collapse: collapse;
        }
        #take table ,#physic table,#math table,#english table, #religion table{
            width: 100%;
        }
        #take th ,#physic th,#math th,#english th ,#religion th{
            background-color: #61dc2d;
            color:white;
        }
        #take td ,#physic td ,#math td ,#english td ,#religion td{
            text-align: center;
        }
        #remove {
            float: left;
            background-color: green;
            color: white;
            font-size: large;
            border: 2px solid #ff6e1c;
            border-radius: 5%;
            padding: 7px;
            margin-left: 40px;
        }
        #insert {
            float: right;
            background-color: green;
            color: white;
            font-size: large;
            border: 2px solid #ff6e1c;
            border-radius: 5%;
            padding: 7px;
        }
        @media only screen and (max-width: 768px) {
            .header{
                color: #00b3ff;
            }
            #sun{
                float:left;
            }
            .menu{
                width: 20%;
            }
            .menu ul {
                height: auto;
            }
            .menu li {
                float: none;
                background-color: #ac41cd;
                border:1px solid #00cd4c;
                border-collapse: collapse;
                text-align: center;
                padding-right: 6px;
                padding-left: 6px;
            }
            .menu li a{
                padding: inherit;
            }
            .content {
                width: 70%;
                background-image: -webkit-gradient(linear,100% 0 , 0 0, from(#00abff), to(transparent));
                background-image: -webkit-linear-gradient(right, #00abff, transparent);
                background-image: -moz-linear-gradient(right, #00abff, transparent);
                background-image: -o-linear-gradient(right, #00abff, transparent);
                background-repeat:repeat;
                height: auto;
            }
            .bot-left:before {
                bottom: -3px;
                width: 3px;
                background-image: -webkit-gradient(linear,0 0 ,0 100% , from(#fff102), to(transparent));
                background-image: -webkit-linear-gradient(#fff102,transparent);
                background-image: -moz-linear-gradient(#fff102,transparent );
                background-image: -o-linear-gradient( #fff102,transparent);
                background-image: linear-gradient(#fff102, transparent);
            }
            .bot-left:after {
                left: -3px;
                height: 3px;
                background-image: -webkit-gradient(linear,100% 0 , 0 0, from(#fff102), to(transparent));
                background-image: -webkit-linear-gradient(right, #fff102, transparent);
                background-image: -moz-linear-gradient(right, #fff102, transparent);
                background-image: -o-linear-gradient(right, #fff102, transparent);
            }
            #take table, th, td {
                border: 2px solid #ff002f;
                border-collapse: collapse;
            }
            #remove {
                border: 2px solid #ff35a2;
            }
            #insert {
                border: 2px solid #ff35a2;
            }
        }

    </style>
</head>
<body>
<div class="header">
    <img id="sun" src="sun.gif" width="50" height="50">
    <h2>انتخاب واحد</h2>
</div>
<div class="row">
    <div class="menu">
        <ul>
            <li><a href="#info" id="a_info">مشخصات فردی</a></li>
            <li><a href="#take" id="a_take">دروس اخذ شده</a></li>
            <li><a href="#math" id="a_math">ریاضیات</a></li>
            <li><a href="#physic" id="a_physic">فیزیک</a></li>
            <li><a href="#english" id="a_english">زبان</a></li>
            <li><a href="#religion" id="a_religion">معارف</a></li>
        </ul>
    </div>
    <div class="content bot-left">
        <h4>خوش آمدید </h4>
        <div id="info">
            <h4 class="text">سرکار خانم  </h4>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "select_units";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT admin_id FROM admin";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                if($row["std_id"] == $_SESSION['username']){
                    $conn1 = new mysqli($servername, $username, $password, $dbname);
                    if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

                    $sSQL= 'SET CHARACTER SET utf8';
                    mysqli_query($conn1,$sSQL)
                    or die ('Can\'t charset in DataBase');

                    $sql1 = "SELECT name,field,std_id,average,being_id FROM student WHERE std_id = ". $_SESSION['username'] ." ;";

                    $result1 = $conn1->query($sql1);
                    if ($result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {
                            echo $row1["name"] . "<br>"."شماره دانشجویی : ".$row1["std_id"]."<br>"."رشته : ".$row1["field"]."<br>";
                            $conn2 = new mysqli($servername, $username, $password, $dbname);
                            if ($conn2->connect_error) {die("Connection failed: " . $conn2->connect_error);}

                            $sSQL= 'SET CHARACTER SET utf8';
                            mysqli_query($conn2,$sSQL)
                            or die ('Can\'t charset in DataBase');

                            $sql2 = "SELECT name FROM college WHERE being_id = ". $row1['being_id'] ." ;";
                            $result2 = $conn2->query($sql2);
                            if ($result2->num_rows > 0) {
                                while ($row2 = $result2->fetch_assoc()) {
                                    echo "دانشکده : ".$row2["name"]."<br>";
                                }
                            }
                            echo "معدل کل : ".$row1["average"]."<br>";
                        }
                        $conn2->close();
                    } else {
                        echo "0 results";
                    }

                    $conn1->close();
                }
            }
            $conn->close();
            ?>
        </div>
        <div id="take">
            <br>
            <form action="?submit=1" method="post">
                <table>
                    <tr>
                        <th>#</th>
                        <th>نام درس</th>
                        <th>کد درس</th>
                        <th>واحد</th>
                        <th>استاد</th>
                        <th>تاریخ امتحان</th>
                    </tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "select_units";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT std_id FROM student";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        if($row["std_id"] == $_SESSION['username']){
                            $conn1 = new mysqli($servername, $username, $password, $dbname);
                            if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

                            $sSQL= 'SET CHARACTER SET utf8';
                            mysqli_query($conn1,$sSQL)
                            or die ('Can\'t charset in DataBase');

                            $sql1 = "SELECT name,unit_number,lesson_id,present_id,teach_id FROM lesson 
where les_id = some(SELECT les_id from select_unit WHERE std_id = ". $_SESSION['username'] ." );";
                            $result1 = $conn1->query($sql1);
                            $i =0;
                            if ($result1->num_rows > 0) {
                                while ($row1 = $result1->fetch_assoc()) {
                                    echo "<tr id='$i++'><td><input type='checkbox' name=".$row1["lesson_id"]." </td>";
                                    echo "<td>".$row1["name"] . "</td>";
                                    echo "<td>".$row1["lesson_id"] . "</td>";
                                    echo "<td>".$row1["unit_number"] . "</td>";
                                    $conn3 = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn3->connect_error) {die("Connection failed: " . $conn3->connect_error);}
                                    $sSQL= 'SET CHARACTER SET utf8';
                                    mysqli_query($conn3,$sSQL)
                                    or die ('Can\'t charset in DataBase');
                                    $sql3 = "SELECT name FROM teacher where teacher_id = some(SELECT teacher_id from teaching where teach_id =".$row1["teach_id"].");";
                                    $result3 = $conn3->query($sql3);
                                    while ($row3 = $result3->fetch_assoc()) {
                                        echo "<td>" . $row3["name"] . "</td>";
                                    }

                                    $conn2 = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn2->connect_error) {die("Connection failed: " . $conn2->connect_error);}

                                    $sSQL= 'SET CHARACTER SET utf8';
                                    mysqli_query($conn2,$sSQL)
                                    or die ('Can\'t charset in DataBase');

                                    $sql2 = "SELECT exam_date FROM present where present_id = ".$row1["present_id"].";";
                                    $result2 = $conn2->query($sql2);
                                    while ($row2 = $result2->fetch_assoc()) {
                                        echo "<td>" . $row2["exam_date"] . "</td>";
                                    }

                                }
                            } else {
                                echo "0 results";
                            }
                            $conn1->close();
                        }
                    }

                    $conn->close();
                    ?>
                </table>
                <br>
                <input type="submit" value="درس انتخابی را حذف کن" id="remove">
            </form>
        </div>
        <div id="math">
            <form action="?submit=1" method="post">
                <table>
                    <tr>
                        <th>#</th>
                        <th>نام درس</th>
                        <th>کد درس</th>
                        <th>واحد</th>
                        <th>استاد</th>
                        <th>تاریخ امتحان</th>
                    </tr>
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                    $sSQL= 'SET CHARACTER SET utf8';
                    mysqli_query($conn,$sSQL)
                    or die ('Can\'t charset in DataBase');
                    $sql = "SELECT name,unit_number,lesson_id,present_id,teach_id FROM lesson";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["present_id"] != NULL) {
                                $conn3 = new mysqli($servername, $username, $password, $dbname);
                                if ($conn3->connect_error) {
                                    die("Connection failed: " . $conn3->connect_error);
                                }
                                $sql3 = "SELECT college_id FROM present where present_id = " . $row["present_id"] . ";";
                                $result3 = $conn3->query($sql3);
                                while ($row3 = $result3->fetch_assoc()) {
                                    if ($row3["college_id"] == 1) {

                                        echo "<tr><td><input type='checkbox' name=" . $row["lesson_id"] . " </td>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["lesson_id"] . "</td>";
                                        echo "<td>" . $row["unit_number"] . "</td>";

                                        $conn1 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn1->connect_error) {
                                            die("Connection failed: " . $conn1->connect_error);
                                        }
                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn1, $sSQL)
                                        or die ('Can\'t charset in DataBase');
                                        $sql1 = "SELECT name FROM teacher where teacher_id = some(SELECT teacher_id from teaching where teach_id =" . $row["teach_id"] . ");";
                                        $result1 = $conn1->query($sql1);
                                        while ($row1 = $result1->fetch_assoc()) {
                                            echo "<td>" . $row1["name"] . "</td>";
                                        }

                                        $conn2 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn2->connect_error) {
                                            die("Connection failed: " . $conn2->connect_error);
                                        }

                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn2, $sSQL)
                                        or die ('Can\'t charset in DataBase');

                                        $sql2 = "SELECT exam_date FROM present where present_id = " . $row["present_id"] . ";";
                                        $result2 = $conn2->query($sql2);
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo "<td>" . $row2["exam_date"] . "</td>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
                <br>
                <input type="submit" value="درس را اضافه کن" id="insert">
            </form>
        </div>
        <div id="physic">
            <form action="?submit=1" method="post">
                <table>
                    <tr>
                        <th>#</th>
                        <th>نام درس</th>
                        <th>کد درس</th>
                        <th>واحد</th>
                        <th>استاد</th>
                        <th>تاریخ امتحان</th>
                    </tr>
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                    $sSQL= 'SET CHARACTER SET utf8';
                    mysqli_query($conn,$sSQL)
                    or die ('Can\'t charset in DataBase');
                    $sql = "SELECT name,unit_number,lesson_id,present_id,teach_id FROM lesson";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["present_id"] != NULL) {
                                $conn3 = new mysqli($servername, $username, $password, $dbname);
                                if ($conn3->connect_error) {
                                    die("Connection failed: " . $conn3->connect_error);
                                }
                                $sql3 = "SELECT college_id FROM present where present_id = " . $row["present_id"] . ";";
                                $result3 = $conn3->query($sql3);
                                while ($row3 = $result3->fetch_assoc()) {
                                    if ($row3["college_id"] == 6) {

                                        echo "<tr><td><input type='checkbox' name=" . $row["lesson_id"] . " </td>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["lesson_id"] . "</td>";
                                        echo "<td>" . $row["unit_number"] . "</td>";

                                        $conn1 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn1->connect_error) {
                                            die("Connection failed: " . $conn1->connect_error);
                                        }
                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn1, $sSQL)
                                        or die ('Can\'t charset in DataBase');
                                        $sql1 = "SELECT name FROM teacher where teacher_id = some(SELECT teacher_id from teaching where teach_id =" . $row["teach_id"] . ");";
                                        $result1 = $conn1->query($sql1);
                                        while ($row1 = $result1->fetch_assoc()) {
                                            echo "<td>" . $row1["name"] . "</td>";
                                        }

                                        $conn2 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn2->connect_error) {
                                            die("Connection failed: " . $conn2->connect_error);
                                        }

                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn2, $sSQL)
                                        or die ('Can\'t charset in DataBase');

                                        $sql2 = "SELECT exam_date FROM present where present_id = " . $row["present_id"] . ";";
                                        $result2 = $conn2->query($sql2);
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo "<td>" . $row2["exam_date"] . "</td>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
                <br>
                <input type="submit" value="درس را اضافه کن" id="insert">
            </form>
        </div>
        <div id="english">
            <form action="?submit=1" method="post">
                <table>
                    <tr>
                        <th>#</th>
                        <th>نام درس</th>
                        <th>کد درس</th>
                        <th>واحد</th>
                        <th>استاد</th>
                        <th>تاریخ امتحان</th>
                    </tr>
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                    $sSQL= 'SET CHARACTER SET utf8';
                    mysqli_query($conn,$sSQL)
                    or die ('Can\'t charset in DataBase');
                    $sql = "SELECT name,unit_number,lesson_id,present_id,teach_id FROM lesson";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["present_id"] != NULL) {
                                $conn3 = new mysqli($servername, $username, $password, $dbname);
                                if ($conn3->connect_error) {
                                    die("Connection failed: " . $conn3->connect_error);
                                }
                                $sql3 = "SELECT college_id FROM present where present_id = " . $row["present_id"] . ";";
                                $result3 = $conn3->query($sql3);
                                while ($row3 = $result3->fetch_assoc()) {
                                    if ($row3["college_id"] == 4) {

                                        echo "<tr><td><input type='checkbox' name=" . $row["lesson_id"] . " </td>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["lesson_id"] . "</td>";
                                        echo "<td>" . $row["unit_number"] . "</td>";

                                        $conn1 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn1->connect_error) {
                                            die("Connection failed: " . $conn1->connect_error);
                                        }
                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn1, $sSQL)
                                        or die ('Can\'t charset in DataBase');
                                        $sql1 = "SELECT name FROM teacher where teacher_id = some(SELECT teacher_id from teaching where teach_id =" . $row["teach_id"] . ");";
                                        $result1 = $conn1->query($sql1);
                                        while ($row1 = $result1->fetch_assoc()) {
                                            echo "<td>" . $row1["name"] . "</td>";
                                        }

                                        $conn2 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn2->connect_error) {
                                            die("Connection failed: " . $conn2->connect_error);
                                        }

                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn2, $sSQL)
                                        or die ('Can\'t charset in DataBase');

                                        $sql2 = "SELECT exam_date FROM present where present_id = " . $row["present_id"] . ";";
                                        $result2 = $conn2->query($sql2);
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo "<td>" . $row2["exam_date"] . "</td>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
                <br>
                <input type="submit" value="درس را اضافه کن" id="insert">
            </form>
        </div>
        <div id="religion">
            <form action="?submit=1" method="post">
                <table>
                    <tr>
                        <th>#</th>
                        <th>نام درس</th>
                        <th>کد درس</th>
                        <th>واحد</th>
                        <th>استاد</th>
                        <th>تاریخ امتحان</th>
                    </tr>
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                    $sSQL= 'SET CHARACTER SET utf8';
                    mysqli_query($conn,$sSQL)
                    or die ('Can\'t charset in DataBase');
                    $sql = "SELECT name,unit_number,lesson_id,present_id,teach_id FROM lesson";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["present_id"] != NULL) {
                                $conn3 = new mysqli($servername, $username, $password, $dbname);
                                if ($conn3->connect_error) {
                                    die("Connection failed: " . $conn3->connect_error);
                                }
                                $sql3 = "SELECT college_id FROM present where present_id = " . $row["present_id"] . ";";
                                $result3 = $conn3->query($sql3);
                                while ($row3 = $result3->fetch_assoc()) {
                                    if ($row3["college_id"] == 3) {

                                        echo "<tr><td><input type='checkbox' name=" . $row["lesson_id"] . " </td>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["lesson_id"] . "</td>";
                                        echo "<td>" . $row["unit_number"] . "</td>";

                                        $conn1 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn1->connect_error) {
                                            die("Connection failed: " . $conn1->connect_error);
                                        }
                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn1, $sSQL)
                                        or die ('Can\'t charset in DataBase');
                                        $sql1 = "SELECT name FROM teacher where teacher_id = some(SELECT teacher_id from teaching where teach_id =" . $row["teach_id"] . ");";
                                        $result1 = $conn1->query($sql1);
                                        while ($row1 = $result1->fetch_assoc()) {
                                            echo "<td>" . $row1["name"] . "</td>";
                                        }

                                        $conn2 = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn2->connect_error) {
                                            die("Connection failed: " . $conn2->connect_error);
                                        }

                                        $sSQL = 'SET CHARACTER SET utf8';
                                        mysqli_query($conn2, $sSQL)
                                        or die ('Can\'t charset in DataBase');

                                        $sql2 = "SELECT exam_date FROM present where present_id = " . $row["present_id"] . ";";
                                        $result2 = $conn2->query($sql2);
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo "<td>" . $row2["exam_date"] . "</td>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
                <br>
                <input type="submit" value="درس را اضافه کن" id="insert">
            </form>
        </div>
    </div>
</div>

</body>
</html>