
<!doctype html>
<html lang="en">
<head>
	<title> Member page ni Fetesio </title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="design2.css">
	
</head>
<body>
	<?php include('header.php');?>
	<?php include('nav.php');?>
    <?php include('info-col.php');?>
	<div class="d-flex justify-content-between align-items-start" >
		<div class="card2 mx-auto">
				<div class="card-body">
					<div class="center">
						<p>
							Movie-Point is your one stop search Movie for the movie you want to watch
							<br> , the goal of this website is to
							help the user to look up first the movies, series, or documentaries <br>they want to watch before they decide to subscribe
						
						</p>
					</div>
				</div>
		</div>	
	</div>
	<br><br>
	<div class="container" >
		
		<div class="card " style="width: 18rem; background-color: #2c2c2c; border: 5px solid #bfeade;
    box-shadow: 0 0 10px #bfeade, 0 0 10px #bfeade, 0 0 20px #bfeade;">
	
			<img class="card-img-top picture" src="pictures/netflix.jpg" alt="Card image cap">
			<div class="card-body mx-auto">
				<h5 class="card-title">Netflix</h5>
				
					 <br>
				<div class="center">
					<a href="https://www.netflix.com/ph-en/" class="btn btn-primary" style="color:black;">Click here</a>
				</div>
			</div>
		</div>
		<div class="card" style="width: 18rem; background-color: #2c2c2c; border: 5px solid #bfeade;
    box-shadow: 0 0 10px #bfeade, 0 0 10px #bfeade, 0 0 20px #bfeade;">
			<img class="card-img-top picture" src="pictures/disney.png" alt="Card image cap">
			<div class="card-body mx-auto">
				<h5 class="card-title">Disney+</h5>
				
					 <br>
				<div class="center">
					<a href="https://redeem.apps.disneyplus.com/ph/onboarding?gclid=CjwKCAiA34S7BhAtEiwACZzv4Vpsk67tt9mK1lWQS8IhtFs55TM6hAQIrwjqzlkd4jR8FYJGXuK0QxoCI6EQAvD_BwE&ref=%2Fph%2Fpaywall%3Ffamily%3DHotstarPremiumSMP%26billing_interval_unit%3DMONTHS%26billing_frequency%3D1%26gad_source%3D1%26gclid%3DCjwKCAiA34S7BhAtEiwACZzv4Vpsk67tt9mK1lWQS8IhtFs55TM6hAQIrwjqzlkd4jR8FYJGXuK0QxoCI6EQAvD_BwE" class="btn btn-primary" style="color:black;">Click here</a>
				</div>
			</div>
		</div>
		<div class="card" style="width: 18rem; background-color: #2c2c2c;border: 5px solid #bfeade;
    box-shadow: 0 0 10px #bfeade, 0 0 10px #bfeade, 0 0 20px #bfeade;">
			<img class="card-img-top picture" src="pictures/appletv.png" alt="Card image cap">
			<div class="card-body mx-auto">
				<h5 class="card-title">Apple TV</h5>
			
					 <br>
				<div class="center">
					<a href="https://tv.apple.com/ph" class="btn btn-primary" style="color:black;">Click here</a>
				</div>
			</div>
		</div>
	</div>	

        <?php include('footer.php');?>

	
</body>
</html>