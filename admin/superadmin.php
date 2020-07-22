<?php


require('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Examination System in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" href="style/TimeCircles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src="js/main.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js"></script>

    <script src="style/TimeCircles.js"></script>
    <style>
        body {
            background: whitesmoke;
        }

        .card-header {
            background: #0FB6C9;
            background: -moz-linear-gradient(left, #0FB6C9 0%, #0BCBC4 32%, #0C89E5 100%);
            background: -webkit-linear-gradient(left, #0FB6C9 0%, #0BCBC4 32%, #0C89E5 100%);
            background: linear-gradient(to right, #0FB6C9 0%, #0BCBC4 32%, #0C89E5 100%);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark position: sticky;" style="background: linear-gradient(to right, rgb(0, 51, 255) 0%, rgb(178, 1, 255) 71%, rgb(255, 3, 3) 100%);
            color: #00849E;">
        <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="LOGO" height="40em"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" href="change_password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="containter">
        <div class="d-flex justify-content-center">
            <br /><br />
            <div class="card" style="margin-top:50px;margin-bottom: 100px;">
                <div class="card-header">
                    <h4>Admin Registration</h4>
                </div>
                <div class="card-body ">
                    <span id="message"></span>
                    <form method="post" id="user_register_form" action="sqlregisteradmin.php" style="width:25em;">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input type="text" id="user_email_address" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" id="user_password" class="form-control" name="password" />
                        </div>
                        <div class="form-group">
                            <label>Enter Confirm Password</label>
                            <input type="password" id="confirm_user_password" class="form-control" />
                        </div>
                        <br />
                        <div class="form-group" align="center">
                            <input type="submit" id="user_register" class="btn btn-success" value="Register" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
            <br /><br />
            <br /><br />
        </div>
    </div>
</body>

</html>