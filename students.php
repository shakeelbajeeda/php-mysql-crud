<?php
session_start();
require_once 'database.php';
class students extends database
{
    public function add_student()
    {
        if (isset($_POST['add'])) {
            if ($_POST['program'] != '' && $_POST['university']) {
                $name = $_POST['name'];
                var_export($name);
                $fname = $_POST['fname'];
                $program = $_POST['program'];
                $university = $_POST['university'];
                $insert = "INSERT INTO students (name, fname, program, university)
                VALUES ('$name', '$fname', '$program', '$university')";
                $this->db->query($insert);
                $_SESSION['add'] = "Student Added Successfully";
                header('location:view-all-students.php');
            } else {
                die("Please Fill All the Fields");
            }
        }
    }
    private $db = null;
    public function __construct()
    {
        $this->db = $this->init_db();
    }
}
$addStudents = new students();
$addStudents->add_student();
