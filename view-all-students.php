<?php
session_start();
require_once 'database.php';
class view_all extends database
{
    public function view_all_students()
    {
        $sql = "select * from students";
        $data = $this->db->query($sql)->fetchAll();
        return $data;
    }
    private $db;
    public function __construct()
    {
        $this->db = $this->init_db();
    }
}
$view_all_students = new view_all();
$data = $view_all_students->view_all_students();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View All Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center py-3">All Students</h1>
        <div class="text-center">
            <a href="add_student.php" class="btn btn-primary"> <i class="fa fa-plus px-2"></i> Add New Student</a>
        </div>
        <?php if (isset($_SESSION['update'])) { ?>
            <center>
                <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['update'] ?>
                    <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </center>
        <?php unset($_SESSION['update']);
        } ?>
        <?php if (isset($_SESSION['add'])) { ?>
            <center>
                <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['add'] ?>
                    <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </center>
        <?php unset($_SESSION['add']);
        } ?>
        <?php if (isset($_SESSION['delete'])) { ?>
            <center>
                <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['delete'] ?>
                    <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </center>
        <?php unset($_SESSION['delete']);
        } ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Program</th>
                    <th scope="col">University</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($data as $student) { ?>
                    <tr>
                        <th scope="row"><?= $student['id'] ?></th>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['fname'] ?></td>
                        <td><?= $student['program'] ?></td>
                        <td><?= $student['university'] ?></td>
                        <td><a href="edit_student.php?id=<?= $student['id'] ?>" class="btn btn-info"><i class="fa fa-edit text-light"></i></a><a href="delete_student.php?id=<?php echo $student['id'] ?>" class="btn btn-danger ms-3"><i class="fa fa-trash text-light"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>