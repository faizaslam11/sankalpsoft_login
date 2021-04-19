 <?php include('server.php') ?> 

<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Login here</h2>
                        <form action="login.php" method="post">
                        <?php include('errors.php') ?>
                            <div class="form.group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <input type="hidden" name="blank" value="login">  
                            <div class="form.group">
                                <label>Password</label>
                                <input type="password" name="password_1" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login </button>

                            <p>New user? <a href="register.php">Register here</a> </p>
                        </form>
                    </div>
                </div>

            </div>
        </body>
    </head>
</html>