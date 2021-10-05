<!DOCTYPE html>
<html lang = "en">
	<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <!-- Google/Custom font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Font awesome css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/oldstyle.css">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" type="image/png" href="img/favi-con.png"/>  
	</head>
<body>

<div class="container">
  <div class="logo">
    <img src="images/homelogo.png" alt="" width="130" height="100">
    </div>
  <nav>
    <ul>
                                              <li><a href="index.php">Home</a></li>
                                              <li><a href="reservation.php">Make a Reservation </a></li>
                                              <li><a href="dineandlounge.php">Dine and Lounge</a></li>	
                                              <li><a href="gallery.php">Gallery</a></li>
                                              <li><a href="contactus.php">Contact Us</a></li>
    
    </ul>
    </nav>
  </div>

	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: NRs. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
    
	<br>
	
    <footer class="tm-footer">
            <div class="tm-us">
            <p class="bold">About Us</p>
            <p>We are a part of chain of luxury hotels 
                which extends all over the world. We 
                provide a luxorious stay with various value
                added and free services which will make
                you visit us over and over again.</p>    
            </div>
           
            <div class="tm-address">
            <p class="bold">Address</p>
            <p>Balkumari, Lalitpur, Nepal
                Phone : +977 98463789
                Email : NCIT@info.com</p>   
            </div>
            <br/>
        <div class="tm-media">
             <a href="#"> <img src="images\fb.png"></a>
            <a href="#"> <img src="images\twit.png"> </a>
            <a href="#">  <img src="images\insta.jpg"> </a>
            
            </div>
        
          
        </footer>
        ​​  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>   
        <script src="js/bootstrap.min.js"></script>
				<script src = "js/jquery.js"></script>
				<script src = "js/bootstrap.js"></script>	
</body>
</html>