<?php
require_once 'database.php';
class edit_student extends database
{
    public function edit_student()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $record = "SELECT * FROM students WHERE id='$id'";
            $n = $this->db->query($record)->fetchAll();
            if (count($n) > 0) {
                $data['name'] = $n[0]['name'];
                $data['fname'] = $n[0]['fname'];
                $data['program'] = $n[0]['program'];
                $data['university'] = $n[0]['university'];
                return $data;
            } else {
                die("record not found");
            }
        } else {
            die('invalid id');
        }
    }
    private $db;
    public function __construct()
    {
        $this->db = $this->init_db();
    }
}

$edit_student = new edit_student();
$data = $edit_student->edit_student();

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Edit Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container mt-3">
        <h2 class="text-center">Edit Student</h2>
        <form method="POST" action="update_student.php">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name" value="<?= $data['name'] ?>" placeholder="Enter Name" name="name" required>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="fname">Father Name:</label>
                    <input type="text" class="form-control" id="fname" value="<?= $data['fname'] ?>" placeholder="Enter Father Name" name="fname" required>
                </div>
                <div class="col-md-3 mt-4">
                    <select name="program" class="form-select" required>
                        <option><?= $data['program'] ?></option>
                        <option>BS(CS)</option>
                        <option>BS(IT)</option>
                        <option>BS(SE)</option>
                        <option>BS(Math)</option>
                        <option>BS(English)</option>
                    </select>
                </div>
                <div class="col-md-3 mt-4">
                    <select name="university" class="form-select" required>
                        <option><?= $data['university'] ?></option>
                        <option>UCP</option>
                        <option>UMT</option>
                        <option>UoL</option>
                        <option>PU</option>
                        <option>NUML</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" name="update" class="btn btn-info float-end px-4"><i class="fa fa-clock-o me-2"></i> Update</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>