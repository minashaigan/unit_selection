<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!DOCTYPE html>
<?php
function Collection($college){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "select_units";
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
                    if ($row3["college_id"] == $college) {

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
    }
?>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Educational Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="lion_icon.ico">
    <script>
        $(document).ready(function(){
            $("#a_info").click(function(){
                $("#info").show();
                $("#take").hide();
                $("#math").hide();
                $("#physic").hide();
                $("#english").hide();
                $("#religion").hide();
            });
            $("#a_take").click(function(){
                $("#take").css('visibility', 'visible');
                $("#take").show();
                $("#info").show();
                $("#math").hide();
                $("#physic").hide();
                $("#english").hide();
                $("#religion").hide();
            });
            $("#a_math").click(function(){
                $("#math").css('visibility', 'visible');
                $("#math").show();
                $("#info").hide();
                $("#take").hide();
                $("#physic").hide();
                $("#english").hide();
                $("#religion").hide();
                $(".content").css('background-repeat','repeat');
                $(".content").css('height','auto');
            });
            $("#a_physic").click(function(){
                $("#physic").css('visibility', 'visible');
                $("#physic").show();
                $("#info").hide();
                $("#take").hide();
                $("#math").hide();
                $("#english").hide();
                $("#religion").hide();
            });
            $("#a_english").click(function(){
                $("#english").css('visibility', 'visible');
                $("#english").show();
                $("#physic").hide();
                $("#info").hide();
                $("#take").hide();
                $("#math").hide();
                $("#religion").hide();
            });
            $("#a_religion").click(function(){
                $("#religion").css('visibility', 'visible');
                $("#religion").show();
                $("#physic").hide();
                $("#info").hide();
                $("#take").hide();
                $("#math").hide();
                $("#english").hide();
            });
            $("#title").find("a").click(function(){
                $("#manager").css('display','block');
                $("#register").hide();
                $("#key").hide();
            });
            $("#title1").find("a").click(function(){
                $("#register").css('display','block');
                $("#manager").hide();
                $("#key").hide();
            });
            $("#title2").find("a").click(function(){
                $("#key").css('display','block');
                $("#register").hide();
                $("#manager").hide();
            });
        });
        function logout( ) {
            location.href='logout.php';
        }
    </script>
    <style>
        body{
            font-family: "B Koodak";

        }
        a {
            text-decoration: none;
        }
        .header{
            color:#04569A;
            text-align: center;
            height: 50px;
        }
        .row {
            padding-top: 20px;
        }
        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            font-size: 18px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;
        }

        .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }
        #user {
            float: right;
        }
        #logout {
            float:left;
            padding: 7px;
            border-radius: 15%;
            background-color: #dd002a;
            border:2px solid #ff002f;
        }
        #logout a{
            text-decoration: none;
            color: white;
            font-size: large;
        }
        .menu{
            width: 150px;
            float: right;
            margin-right: 10px;
        }
        #manager ,#register ,#key {
            text-align:center;
            border:4px solid #d45aff;
            background-color: #763b97;
            line-height: 35px;
        }
        #register ,#key {
            display: none;
        }
        #manager a,#register a,#key a{
            text-decoration: none;
            color: white;
        }
        #title ,#title1 ,#title2 {
            text-align: center;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px;
            border:2px solid orange;
            border-left: 4px solid orange;
            border-right: 4px solid orange;
            background-color: #ff35a2;
        }
        #title a ,#title1 a,#title2 a{
            color:yellow;
            padding:5px;
            text-decoration: none;
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
        input[type=checkbox] {
            width: 15px;
            height: 15px;
            cursor: pointer;
            font-size: 12px;
        }
        input[type=checkbox]:after {
            width: 15px;
            height: 15px;
            content: " ";
           background-color:white ;
            display: inline-block;
            text-align: center;
            border: 2px solid green;
        }
        input[type=checkbox]:checked:after {
            content: "\2714";
            text-align: center;
            background-color: #9FFF9D;
        }

        #info ,#take ,#physic ,#math ,#english,#religion{
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
        #take tr:hover,#physic tr:hover,#math tr:hover,#english tr:hover,#religion tr:hover{
            background-color: #ffefb1;
        }
        #remove {
            float: left;
            background-color: green;
            color: white;
            font-size: large;
            border: 5px solid #ff6e1c;
            border-radius: 5%;
            padding: 7px;
            margin-left: 40px;
        }
        #insert {
            float: right;
            background-color: green;
            color: white;
            font-size: large;
            border: 5px solid #ff6e1c;
            border-radius: 5%;
            padding: 7px;
        }
        .style-three {
            border: 0;
            border-bottom: 1px dashed #ccc;
            background: #999;
        }
        #welcome ,#welcome1 {
            display: none;
        }
        @media only screen and (max-width: 768px) {
            .header{
                color: #00b3ff;
            }
            .menu{
                width: 20%;
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
    <div class="chip" id="user">

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "select_units";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sSQL= 'SET CHARACTER SET utf8';
        mysqli_query($conn,$sSQL)
        or die ('Can\'t charset in DataBase');
        $sql = "SELECT name,gender,counter FROM student WHERE  std_id = ". $_SESSION['username'] .";";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if($row['gender']=="زن"){
                ?>
                <img src="img_avatar2.png" alt="Person" width="96" height="96">
        <?php
            } else {
                ?>
                <img src="img_avatar.png" alt="Person" width="96" height="96">
        <?php
            }
            echo $row['name'];
        if($row['counter']==0){
            $conn1 = new mysqli($servername, $username, $password, $dbname);
            if ($conn1->connect_error) {
                die("Connection failed: " . $conn1->connect_error);
            }
            $sql1 = "UPDATE student SET counter=1 WHERE  std_id = ". $_SESSION['username'] .";";
            if ($conn1->query($sql1) === FALSE) {
                echo "Error: " . $sql1 . "<br>" . $conn1->error;
            }
            $conn1->close();
        ?>
            <script>
                $(document).ready(function(){
                    $("#welcome").css('display','block');
                    $("#welcome1").css('display','block');
                });
            </script>
        <?php
        }
        }
        $conn->close();
        ?>
    </div>
        <button id="logout"><a  href="logout.php" >خروج</a></button>

</div>
<div class="row">
    <div class="menu">
            <div id="title"><a href="#title1">مدیریت</a><br></div>
            <div id="manager">
                <a href="#worktable" id="a_worktable">ميز کار</a><br>
                <a href="">آموزشي</a><br>
                <a href="">ترمي</a><br>
                <a href="">دروس</a><br>
                <a href="">مشاوره کارشناسي</a><br>
                <a href="">پيش ثبت نام</a><br>
                <a href="">پروژه</a><br>
                <a href="">مالي</a><br>
                <a href="">فارغ التحصيلي</a><br>
                <a href="">سوابق تحصيلي</a><br>
                <a href="">مدارک</a><br>
                <a href="">کميسيون</a><br>
            </div>
            <div id="title1"><a href="#take">ثبت نام</a><br></div>
            <div id="register">
                <a href="#take" id="a_take">اخذ شده</a><br>
                <a href="#info" id="a_info">دانشکده</a><br>
                <a href="#math" id="a_math">رياضيات</a><br>
                <a href="#physic" id="a_physic">فيزيک</a><br>
                <a href="">آز فيزيک 1</a><br>
                <a href="">آز فيزيک 2</a><br>
                <a href="">سرويس</a><br>
                <a href="#english" id="a_english">زبان</a><br>
                <a href="#religion" id="a_religion">تاريخ اسلام</a><br>
                <a href="">انديشه اسلامي</a><br>
                <a href="">فارسي</a><br>
                <a href="">اخلاق اسلامي</a><br>
                <a href="">انقلاب</a><br>
                <a href="">تفسير موضوعي</a><br>
                <a href="">تربيت بدني 1</a><br>
                <a href="">تربيت بدني 2</a><br>
            </div>
            <div id="title2"><a href="#take">تغییر رمز</a><br></div>
            <div id="key">
                <a href=""><img id="imgDino" src="key.png" width="140" height="100" style="position:relative;left:0"><br>تغییر کلمه عبور</a><br>
            </div>
            <script>
                $(function() {
                    $("#imgDino").hover(
                        function() {
                            $(this).attr("src", "key.gif");
                        },
                        function() {
                            $(this).attr("src", "key.png");
                        }
                    );
                });
            </script>
        </div>
    </div>
    <div class="content bot-left">
        <div class="part1">
            <div id="worktable">
                <img src="worktable.png" ><br>
                <img src="office.png">
                <img src="news.png">
                <hr>
                <p id="welcome">
                    دانشجوي عزيز و گرامي<br>
در آغاز سال تحصيلي جديد آرزويمان سعادت و سرافرازي تمامي دانشجويان و دانش پژوهان اين مرز و بوم است. برخود ميباليم كه به عنوان عضو كوچكي از جامعه بزرگ و گسترده تعليم و تربيت در خدمت آينده سازان كشور عزيزمان هستيم. اميد است كه در سايه الطاف بيكران الهي اهداف سند چشم انداز و توسعه آموزش عالي محقق ،و سالي توام با موفقيت و سلامتي در پيش رو داشته باشيم.
                </p>
                <hr class="style-three" id="welcome1">
                <p>
                    قابل توجه دانشجويان کارشناسي<br>
                    براي اطلاع از تغييرات در برنامه هفتگي ثبت نام کارشناسي در ايام ثبت نام مي توانيد لحظه به لحظه به لينک سريع
                  <a href="http://i.aut.ac.ir ">http://i.aut.ac.ir </a>
                    مراجعه فرمائيد.
                </p>
                <hr class="style-three">
                <p> خواهشمند است نظرات و پيشنهادات خود را درباره پورتال دانشگاه, از طريق پست الکترونيکي با من در ميان بگذاريد . با تشکر
                    (
                    <a href="mailto:mina.shaigan@gmail.com">پست الکترونيکي</a>
                    )
                </p>
            </div>
        </div>
        <div class="part2">
            <div id="info">
            <span class="text">نام دانشجو : </span>
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
                                    echo "<tr id='$i++'><td><div class='check'><input type='checkbox' name=".$row1["lesson_id"]." ></div></td>";
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
                        Collection(1);
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
                        Collection(6);
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
                        Collection(4);
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
                        Collection(3);
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