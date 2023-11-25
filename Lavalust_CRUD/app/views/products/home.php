<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lavalust CRUD</title>
    <style>
        /* Custom CSS for slate theme */
        body {
            background-color: #000 !important;
            color: #fff;
        }
        .vh-100 {
            min-height: 100vh;
        }
        .gradient-custom {
            background: linear-gradient(45deg, #333, #555);
        }
        .card {
            background-color: #444;
            border: 1px solid #555;
        }
        .card-body {
            color: #fff;
        }
        .form-control {
            background-color: #555;
            color: #fff;
        }
        .form-control:focus {
            background-color: #444;
            color: #fff;
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

<body class="bg-dark">
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Student Info</h3>
                            <form action="<?php echo site_url('add');?>" method="post">
                                <div class="form-group">
                                    <label for="firstName">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email</label>
                                    <input type="email" name="email" id="emailAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Choose Program</label>
                                    <select class="form-control" name="course">
                                        <option disabled>Choose option</option>
                                        <option value="BSED">Bachelor of Secondary Education</option>
                                        <option value="BTVTED">Bachelor of Technical-Vocational Teacher Education</option>
                                        <option value="BSIT">Bachelor of Science in Information Technology</option>
                                        <option value="BSCRIM">Bachelor of Science in Criminology</option>
                                        <option value="BSTM">Bachelor of Science in Tourism Management</option>
                                        <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                                        <option value="AB PSYCHOLOGY">Bachelor of Arts in Psychology</option>
                                        <option value="AB ENGLISH">Bachelor of Arts in English Language</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="tel" name="age" id="age" class="form-control">
                                </div>
                                <div class="mt-4">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
