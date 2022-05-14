<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container mt-3">
        <h2 class="text-center">Add Student</h2>
        <form method="POST" action="students.php">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="fname">Father Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter Father Name" name="fname" required>
                </div>
                <div class="col-md-3 mt-4">
                    <select name="program" class="form-select" required>
                        <option selected disabled>Select Program</option>
                        <option>BS(CS)</option>
                        <option>BS(IT)</option>
                        <option>BS(SE)</option>
                        <option>BS(Math)</option>
                        <option>BS(English)</option>
                    </select>
                </div>
                <div class="col-md-3 mt-4">
                    <select name="university" class="form-select" required>
                        <option selected disabled>Select University</option>
                        <option>UCP</option>
                        <option>UMT</option>
                        <option>UoL</option>
                        <option>PU</option>
                        <option>NUML</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" name="add" class="btn btn-primary float-end px-4"><i class="fa fa-plus me-2"></i> Add</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>