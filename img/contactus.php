<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/contact.css"> -->

    <title>Contact me</title>
</head>

<?php include 'header.php' ?>
<div class="container-fluid decor_bg" id="content">
    <div class="row">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h2>Contact Me</h2>
                <form class="form-horizontal" action="signup_script.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <!-- <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div> -->
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" name="city" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Code Need Then Type Yes" name="codeneed" required>

                    </div>
                    <button type="submit" name="submit" value="registration_submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
</body>

</html>