<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
session_start();
error_reporting(0);
?>
<?php
if (isset($_GET['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "select_units";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM student WHERE std_id=" . '"' . $_POST['id'] . '"' . " AND password=" . '"' . $_POST['pass'] . '"';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //print_r($result);
        $_SESSION['username'] = $_POST['id'];
        $_SESSION['password'] = $_POST['pass'];
    }
    $conn1 = new mysqli($servername, $username, $password, $dbname);
    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }
    $sql1 = "SELECT * FROM admin WHERE admin_id=" . '"' . $_POST['id'] . '"' . " AND password=" . '"' . $_POST['pass'] . '"';
    $result1 = $conn1->query($sql1);
    if ($result1->num_rows > 0) {
            echo "f";
            $_SESSION['admin'] = $_POST['id'];
            $_SESSION['pass'] = $_POST['pass'];
    }
    else {
            ?>
            <script>
                $(document).ready(function () {
                    $(".invalid").css('display', 'block');
                    $(".invalid").css('color', 'red');
                });
            </script>
        <?php
        }
}
if((isset($_SESSION['username']) and isset($_SESSION['password'])) or (isset($_SESSION['admin']) and isset($_SESSION['pass'])) ) {
    if(isset($_SESSION['username']) and isset($_SESSION['password'])){
        header('Location: unit_sel.php');
        die();}
    if(isset($_SESSION['admin']) and isset($_SESSION['pass'])){
        header('Location: admin.php');
        die();}
}
else {
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>

        <style>
            body {
                font-family: "B Koodak";
            }
            h4 {
                text-align: center;
            }
            .invalid {
                display:none;
            }
            hr {
                height: 30px;
                border-style: solid;
                border-color: black;
                border-width: 1px 0 0 0;
                border-radius: 20px;
                width: 400px;
            }
            hr:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: black;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }
            form {
                text-align: center;
                left: 50%;
                direction: rtl;
                background-color: deeppink;
                padding-top: 15px;
                padding-bottom: 15px;
                margin-left: 500px;
                margin-right: 500px;
                border-radius: 2%;
            }
            input {
                padding: 3px;
                margin: 5px;
            }

            .text {
                color: #4FEF10;
                font-size: 18px;
            }
            #text {
                padding-right: 10px;
                padding-left: 10px;
                padding-top: 5px;
                padding-bottom: 5px;
                margin-right: 80px;
                background-color: #ac41cd;
                border-color: #ac41cd;
                color: white;
            }

            @media only screen and (max-width: 768px) {
                form {
                    text-align: center;
                    left: 10%;
                    direction: rtl;
                    background-color: deeppink;
                    padding-top: 15px;
                    padding-bottom: 15px;
                    margin-left: 150px;
                    margin-right: 150px;
                }
            }
        </style>
    </head>
    <body>
    <h4>ورود کاربران پورتال دانشگاه</h4>
    <h4> . در مراقبت از کلمه عبور خود دقت کافي مبذول داريد </h4>
    <hr>
    <h4 class="invalid"> !اطلاعات وارد شده نامعتبر است</h4>
    <h4 class="invalid"> ...لطفا دوباره تلاش کنيد </h4>
    <form action="?submit=1" method="post">
        <span class="text">    نام کاربری :</span>
        <input type="text" name="id">
        <br>
        <span class="text">     کلمه عبور  :</span>
        <input type="password" name="pass" style="margin-right: 10px">
        <br>
        <input id="text" type="submit" value="ورود به پورتال">
    </form>
    </body>
    </html>
    <?php
}
    ?>

