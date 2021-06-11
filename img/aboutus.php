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

    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>

<body style="padding-top: 60px;">

<style>

	.container{
		max-height: 600px;
		
	}
	#content{
		height: 900px;
		
	}	



.container #content{
    flex-direction: column;
    max-width: 1200px;
    margin: 0 auto;
	height: auto;
	

}
.container #content{
  max-width: 400px;
   
}
.container #content{
    /* width: 100%; */
    text-align: center;
    border-radius: 10px;
    margin: 10px;
    padding: 10px;
    display: flex;   
    justify-content: center space-around ;
    align-items: center;
    flex-direction: column;
    box-shadow: 0px 0px 10px 0 #0000002c;
    transition: .3s ease box-shadow;
	
}
.container #content:hover{
    box-shadow: 5px 0 5px 1px #c8ff02;
}

.container .icon{

    font-size: 40px;
    margin: 5px 10px;
    margin-bottom: 10px;
	padding-left: 6px;

}
.container #content{
    display: inline-flex;
}
.container #content h1{
    display: flex;
    font-size: 2.5rem;
    font-weight: 500;
    margin-bottom: 10px;
    

}
.container #content h2{
    font-size: 1.3rem;
    line-height: 1rem;
    font-weight: 500;
}

</style>

<?php include 'header.php' ?>


	<!-- <section id="contact">
    <div class="contact container">
        <div><h1 class="section-title">Contact <span>Info</span> </h1></div>
        <div class="contact-items">
            <div class="contact-item col-md-4">
                <div class="icon">&#128222;</div>
                <div class="contact-info"></div>
                <h1>Phone</h1>
                <h2>+917021678128</h2>
                <h2>+917208683297</h2>
            </div>
            <div class="contact-item col-md-4">
                <div class="icon">&#128231;</div>
                <div class="contact-info"></div>
                <h1>Email ids</h1>
                <h2>shaikhshahim786@gmail.com</h2>
                <h2>shahim_sn@yahoo.com</h2>
            </div>
            <div class="contact-item col-md-4">
                <div class="icon">&#127757;</div>
                <div class="contact-info"></div>
                <h1 >Address</h1>
                <h2>B 604 Shivling Tower Shanti</h2>
                <h2>Park Mira Road East</h2>
                <h2>pincode:- 401107</h2>
            </div>
        </div>
    </div>
</section> -->
<center>

<div class="container text-center">
	<div class="row">
		<h1>Contact Info</h1>
		<div class="col-md-4" id="content" >
		<div class="icon">&#128222;</div>
                <div class="contact-info"></div>
                <h1>Phone</h1>
                <h2>+917021678128</h2>
                <h2>+917208683297</h2>
		</div>
		<div class="col-md-4" id="content">
		<div class="icon">&#128231;</div>
                <div class="contact-info"></div>
                <h1>Email ids</h1>
                <h2>shaikhshahim786@gmail.com</h2>
                <h2>shahim_sn@yahoo.com</h2>
		</div>
	

	</div>


</div>
</center>



    
</body>
</html>