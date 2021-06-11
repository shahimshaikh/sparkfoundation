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

    <title>Banking System</title>
</head>

<style>
footer{
    background-color: black;
    color: white;
    padding: 1%;
}
body{
    background-image: radial-gradient(brown);
}


</style>

<body style="padding-top: 50px;">

<?php include 'header.php' ?> 


    <!-- navbar end  -->

    <!-- body tag head -->
    <div class="container-fluid">
        <div class="row" id="content">
            <div class="text-center jumbotron">
                <a href="index.php" class="text-white-50 bg-dark"><h1>Basic Banking System</h1></a>

            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            
                            <a href="transfermoney.php" class="btn btn-primary"><button type="button" class="btn btn-success btn-block">All Users</button> </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                           
                            <a href="transfermoney.php" class="btn btn-primary"> <button type="button" class="btn btn-success text-black" >Transfer Money</button></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            
                            <a href="transectionhistory.php" class="btn btn-primary"><button class="btn btn-success text-black">Transection History</button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transection history end -->

    <!-- footer start  -->

<?php include 'footer.php' ?> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>

</html>