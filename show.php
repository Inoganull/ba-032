<?php

require_once "vendor/autoload.php";

    $db = new DB();

    $student = $db->show($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>School Page</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if($student): ?>
                    <p>ID: <?php echo $student->id; ?></p>
                    <p>Name: <?php echo $student->name; ?></p>
                    <p>Eamil: <?php echo $student->email; ?></p>
                    <p>Gender: <?php echo $student->gender; ?></p>
                    <p>DOB: <?php echo $student->dob; ?></p>
                    <p>Age: <?php echo $student->age; ?></p>

                    <a href="index.php" class="btn btn-primary">Back</a>
                    <a href="edit.php?id=<?php echo $student->id; ?>" class="btn btn-info">Edit</a>
                    <a href="destroy.php?id=<?php echo $student->id; ?>" class="btn btn-danger">Delete</a>
                <?php else: ?>
                    <p>Student Not Found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>