<?php
require 'forphp/connect.php';
$id = $_GET['id'];
$delete = mysqli_query($conn,"DELETE FROM `user_message` WHERE `id`='$id'");
header('location:admin.php');

