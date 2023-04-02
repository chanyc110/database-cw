<?php 
session_start();

	include("car_connection.php");
	include("car_function.php");   

	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Car Rental</title>
    <link href="car_index.css" rel="stylesheet">

</head>

<body>

	<nav>
        <ul>
            <li class="nav-cars active">Cars</li>
            <li class="nav-update">Update Reservation</li>
            <li class="nav-cancel">Cancel Reservation</li>
        </ul>
        <a href="car_logout.php">Logout</a> 
    </nav>


	<div class="main-container">
        <div class="cars-container">

            <div class="title-container">
                <h2 class="luxury-title active">Luxury</h2>
                <h2 class="sports-title">Sports</h2>
                <h2 class="classic-title">Classic</h2>
    		 </div>

			 <!-- luxury cars -->
			 <div class="luxury-container">
                <a class="car" href="car_individual.php?car_name=Rolls%20Royce%20Phantom%20(Blue)&car_type=Luxurious&car_colour=blue&rental_rate=9800">
                    <img src="cars/Rolls Royce Phantom (Blue).png">
                    <div class="car-name">Rolls Royce Phantom (Blue) <br><span>Price per day:RM 9800</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Bentley%20Continental%20Flying%20Spur%20(White)&car_type=Luxurious&car_colour=white&rental_rate=4800">
                    <img src="cars/Bentley Continental Flying Spur (White).jpg">  
                    <div class="car-name">Bentley Continental Flying Spur (White) <br><span>Price per day:RM 4800</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Mercedes%20Benz%20CLS%20350%20(Silver)&car_type=Luxurious&car_colour=Silver&rental_rate=1350">
                    <img src="cars/Mercedes Benz CLS 350 (Silver).jpg">
                    <div class="car-name">Mercedes Benz CLS 350 (Silver) <br><span>Price per day:RM 1350</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Jaguar%20S%20Type%20(Champagne)&car_type=Luxurious&car_colour=Champagne&rental_rate=1350">
                    <img src="cars/Jaguar S Type (Champagne).jpg">
                    <div class="car-name">Jaguar S Type (Champagne) <br><span>Price per day:RM 1350</span></div>
                </a>
            </div>


			<!-- sports cars -->
			<div class="sports-container">
                <a class="car" href="car_individual.php?car_name=Ferrari%20F430%20Scuderia%20(Red)&car_type=Sports&car_colour=Red&rental_rate=6000">
                    <img src="cars/Ferrari F430 Scuderia (Red).jpg">
                    <div class="car-name">Ferrari F430 Scuderia (Red) <br><span>Price per day:RM 6000</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Lamborghini%20Murcielago%20LP640%20(Matte%20Black)&car_type=Sports&car_colour=Matte%20Black&rental_rate=7000">
                    <img src="cars/Lamborghini Murcielago LP640 (Matte Black).jpg">
                    <div class="car-name">Lamborghini Murcielago LP640 (Matte Black) <br><span>Price per day:RM 7000</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Porsche%20Boxster%20(White)&car_type=Sports&car_colour=White&rental_rate=2800">
                    <img src="cars/Porsche Boxster (White).jpg">
                    <div class="car-name">Porsche Boxster (White) <br><span>Price per day:RM 2800</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Lexus%20SC430%20(Black)&car_type=Sports&car_colour=Black&rental_rate=1600">
                    <img src="cars/Lexus SC430 (Black).jpg">
                    <div class="car-name">Lexus SC430 (Black) <br><span>Price per day:RM 1600</span></div>
                </a>
            </div>


			<!-- classic cars -->
			<div class="classic-container">
                <a class="car" href="car_individual.php?car_name=Jaguar%20MK%20%32%20White&car_type=Classic&car_colour=White&rental_rate=2200">
                    <img src="cars/Jaguar MK 2 (White).jpg">
                    <div class="car-name">Jaguar MK 2 (White) <br><span>Price per day:RM 2200</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=Rolls%20Royce%20Silver%20Spirit%20Limousine%20(Georgian%20Silver)&car_type=Classic&car_colour=Georgian%20Silver&rental_rate=3200">
                    <img src="cars/Rolls Royce Silver Spirit Limousine (Georgian Silver).jpg">
                    <div class="car-name">Rolls Royce Silver Spirit Limousine (Georgian Silver) <br><span>Price per day:RM 3200</span></div>
                </a>
                <a class="car" href="car_individual.php?car_name=MG%20TD%20(Red)&car_type=Classic&car_colour=Red&rental_rate=2500">
                    <img src="cars/MG TD (Red).jpg">
                    <div class="car-name">MG TD (Red) <br><span>Price per day:RM 2500</span></div>
                </a>
            </div>

		</div>


		<!-- update reservation -->
		<div class="update-container">
            <h2 class="update-container-title">Update Reservation</h2>
            <div class="update-box">
                <form name="update-form" method="POST">
                    <div class="input-box">
                        <input name="reservation" type="text" required>
                        <label>Reservation Number</label>
                    </div>
                    <div class="input-box-date">
                        <input name="startdate" type="date" required>
                        <label>Start Date</label>
                    </div>
                    <div class="input-box-date">
                        <input name="date" type="date" value=""required>
                        <label>End Date</label>
                    </div>
                    <div id="submit-button">
                        <input type="submit" value="Submit" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </form>
            </div>
        </div>


		<!-- cancel reservation -->
		<div class="cancel-container">
            <h2 class="cancel-container-title">Cancel Reservation</h2>
            <div class="update-box">
                <form name="cancel-form" method="POST">
                    <div class="input-box">
                        <input name="reservation" type="text" required>
                        <label>Reservation Number</label>
                    </div>
                    <div id="submit-button">
                        <input type="submit" value="Cancel Reservation" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </form>
            </div>
        </div>

	</div>

	<script src="index.js"></script>
	
</body>

</html>