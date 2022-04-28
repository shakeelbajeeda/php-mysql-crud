<?php
session_start();
require_once 'database.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $program = $_POST['program'];
    $university = $_POST['university'];

    // checking empty fields
    if (empty($name) || empty($fname) || empty($program) || empty($university)) {

        if (empty($name)) {
            echo "<font color='red'>name field is empty.</font><br/>";
        }

        if (empty($fname)) {
            echo "<font color='red'>fname field is empty.</font><br/>";
        }

        if (empty($program)) {
            echo "<font color='red'>program field is empty.</font><br/>";
        }
        if (empty($university)) {
            echo "<font color='red'>university field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $sql = "UPDATE students SET name=:name, fname=:fname, program=:program, university = :university WHERE id=:id";
        $query = $db->prepare($sql);
        // die($sql);


        $query->bindparam(':id', $id);
        $query->bindparam(':name', $name);
        $query->bindparam(':fname', $fname);
        $query->bindparam(':program', $program);
        $query->bindparam(':university', $university);
        $query->execute();
        $_SESSION["update"] = "Product Updated Successfully!";
        header("Location: view-all-students.php");
    }
}
