<?php
session_start();
require_once 'database.php';
class delete_student extends database
{
    public function delete_student()
    {
        $id = $_GET['id'];
        if (isset($_GET['id']) && isset($_GET['id']) != '') {
            $delete = "DELETE  FROM students WHERE id = '$id'";
            $this->db->query($delete);
        } else {
            die("invalid id");
        }
        $_SESSION["delete"] = "Student Deleted Successfully!";
        header('location:view-all-students.php');
    }
    private $db;
    public function __construct()
    {
        $this->db = $this->init_db();
    }
}

$delete_student = new delete_student();
$delete_student->delete_student();
