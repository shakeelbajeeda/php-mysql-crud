<?php
session_start();
require_once 'database.php';
$id = $_GET['id'];
if (isset($_GET['id']) && isset($_GET['id']) != '') {
    $delete = "DELETE  FROM students WHERE id = '$id'";
    $d = $db->query($delete);
} else {
    die("invalid id");
}
$_SESSION["delete"] = "Student Deleted Successfully!";
header('location:view-all-students.php');
