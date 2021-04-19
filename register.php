<?php include('server.php');
    // include('errors.php'); ?>

<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Register here</h2>
                        <form action="register.php" method="post">
                        <?php include('errors.php') ?>
                            <div class="form.group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>

                            </div>
                            <div class="form.group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form.group">
                                <label>Password</label>
                                <input type="password" name="password_1" class="form-control" required>
                            </div>
                            <div class="form.group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_2" class="form-control" required>

                            </div>
                            <button type="submit" class="btn btn-primary">submit </button>

                            <p>Already a user? <a href="login.php">Login</a> </p>
                        </form>
                    </div>
                </div>

            </div>
        </body>
    </head>
</html>