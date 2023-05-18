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
    <title>Edit Student</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if($student): ?>
                    <h3>Edit Student</h3>

                    <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $student->id; ?>">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo $student->name; ?>" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php echo $student->email; ?>" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="" disabled>Gender</option>
                                <option value="male" <?php if($student->gender == 'male') {echo "selected";} ?>>Male</option>
                                <option value="female" <?php if($student->gender == 'female') {echo "selected";} ?>>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" value="<?php echo $student->dob; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" name="age" value="<?php echo $student->age; ?>" class="form-control">
                        </div>

                        <button class="btn btn-primary">Update Student</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </form>

                <?php else: ?>
                    <p>Student is not found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>