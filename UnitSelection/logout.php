<!DOCTYPE html>
<html lang="en">
<head>
<title>logout</title>
<link rel="icon" href="lion icon.png">
<?php
session_start();
?>
<?php
session_destroy();
?>
<script>
location.href='login.php';
</script>
</head>
