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
        <div class="row">
            <div class="col-10">
                <a href="create" class="btn btn-primary">Create New Student</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-10">
                <?php if($students): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>

                        <?php foreach($students as $student): ?>
                            <tr>
                                <td><?php echo $student->name; ?></td>
                                <td><?php echo $student->email; ?></td>
                                <td><?php echo ucfirst($student->gender); ?></td>
                                <th>
                                    <a href="show?id=<?php echo $student->id; ?>" class="btn btn-primary btn-sm" >Detail</a>
                                    <a href="delete?id=<?php echo $student->id; ?>" class="btn btn-outline-danger btn-sm">Delete</a>

                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <p>No Students found in Database</p>
                <?php endif; ?>        
            </div>
        </div>
    </div>
</body>
</html>