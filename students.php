<?php
session_start();
require_once 'database.php';
if (isset($_POST['add'])) {
    if ($_POST['program'] != '' && $_POST['university']) {
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $program = $_POST['program'];
        $university = $_POST['university'];
        $insert = "INSERT INTO students (name, fname, program, university)
        VALUES ('$name', '$fname', '$program', '$university')";
        $result = $db->query($insert);
        $_SESSION['add'] = "Student Added Successfully";
        header('location:view-all-students.php');
    } else {
        die("Please Fill All the Fields");
    }
}
