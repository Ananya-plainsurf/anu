<!-- front page-->


<html>
    <head>
        <title>
            User login and registrations
        </title>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="form.css" type="text/css">
    </head>
    <body>
        <div class="body-content">
            <div class="module">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Login Form</h2>
                        <form action=".//validation.php" method="POST">
                       
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button   class="btn btn-primary" type="submit" name="submit" value="Log-In">
                                Login
                            </button>
                            <button onclick="window.location.href = 'registration.php';" class="btn btn-primary">
                                Register
                            </button> 
                        </form>
                    
                    </div>

                </div>
            </div>
        </div>


    </body>


</html>



