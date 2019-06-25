<!-- registration file-->

<html>
    <head>
        <title>Registration from</title>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="form.css" type="text/css">
    </head>
    <body>
        <button  onclick="window.location.href = 'index.php';" class="btn btn-primary" >
            Home
        </button>

        <div>
            <form action="config.php" method="post" enctype="multipart/form-data">
                <div class="body-content">
                    <div class="module">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Registration Form</h2>
                                <p>Fill all necessary fields</p>
                                <hr class="mb-3">

                                <label for="email">Email</label> 
                                <input class="form-control" type="email" name="email" required>

                                <label for="pname">Project Name</label> 
                                <input  class="form-control" type="text" name="pname"required >

                                <label for="gmember">Group Members</label> 
                                <input class="form-control"  type="text" name="gmember" required>

                                <label for="gm_name">Members name</label> 
                                <input  class="form-control" type="text" name="gm_name"required >

                                <label for="startdate">Start Date</label> 
                                <input class="form-control"  type="date" name="startdate" required >

                                <label for="enddate">End Date</label> 
                                <input class="form-control"  type="date" name="enddate" required>

                                <label for="status">Status</label> 
                                <input class="form-control"  type="text" name="status" required>

                                <label for="password">Password</label> 
                                <input class="form-control"  type="password" name="password" required>

                                <input type="submit" name="submit" value="sign up" class="btn btn-primary" >

                                <input type="reset" name="reset"value="Reset" class="btn btn-primary">

                                <hr class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


