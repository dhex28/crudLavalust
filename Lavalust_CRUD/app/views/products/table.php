<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student Info</title>
    <style>
        /* Custom CSS for slate theme */
        body {
            background-color: #222;
            color: #fff;
        }
        .container {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
        }
        .table {
            background-color: #444;
            border-color: #555;
            color: #fff;
        }
        .table th, .table td {
            border-color: #555;
        }
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-3 text-center">
        <h2>Student Info</h2>
        <a href="<?= site_url('/')?>" class="btn btn-primary mb-3">Add Student Info</a>
        
        <table class="table table-dark table-hover table-sm table-bordered text-center align-middle">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            <?php foreach ($data as $info) : ?>
                <tr>
                    <td>
                        <?= $info['id'] ?>
                    </td>
                    <td>
                        <?= $info['name'] ?>
                    </td>
                    <td>
                        <?= $info['email'] ?>
                    </td>
                    <td>
                        <?= $info['course'] ?>
                    </td>
                    <td>
                        <?= $info['age'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url('delete/' . $info['id']) ?>" class="btn btn-success mb-3">Delete</a>
                        <a href="<?= site_url('edit/' . $info['id']) ?>" class="btn btn-success mb-3">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
