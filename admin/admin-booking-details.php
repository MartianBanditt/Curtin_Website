<?php
   require_once 'admin-functions.php';
   require '../scripts/conn.php';
        
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Booking Details</title>
    <?php style_sheets(); ?>
    
</head>

<body>

    <!-- header starts here -->
    <header class="container">
        <?php header_content(); ?>
    </header>
	
    <main>
        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background title">
            <section id="title" class="container">

                <h1>Booking Details</h1>
				
				<hr>
				<?php mainMenuButton();?>
				
				<hr>
				<?php
			
					try{
				
						// Create connection
						$conn = mysqli_connect($servername,$username,$password,$dbname);
						
						// Check connection
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
						
						$query = "SELECT * FROM `Bookings` WHERE 1";
						$result = mysqli_query($conn, $query);
							
						
						if(!$result){
							echo "<script>alert('failed: ')</script>";
						}
						
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<section class='listofaccounts'>";
							echo "<article class='position'>";
							echo "<b><u>Booking Date: </u></b>". $row['date'] . "</br>";
							echo "<b>Booking Made by: </b>" . $row['name'];
							echo "<b>Time: </b>" .$row['time'] . "</br>";
							echo "<b>Contact email: </b> " .$row['email'] . "</br>";
							echo "<b>Contact Phone: </b> " .$row['mobile']. "</br>";
							echo "<form action='delete_booking.php?id=".$row['id']."' method='post'>
								<input class='btn btn-secondary btn-lg' type='submit' name='delete_booking' 
								value='Delete Booking' style='float: right; margin-top: -70px;'/></form>";
							
							echo "</article>";
							echo "</section>";
						
							}
						
						} catch(Exception $e ){
							echo "<script>alert('Connection failed: ')</script>";
						}
						
							// release returned data
						mysqli_free_result($result);
													
						// close database connection
						mysqli_close($conn);
			
					?>
				
				
				
            </section>
        </div>
		
    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>
    
</body>

</html>