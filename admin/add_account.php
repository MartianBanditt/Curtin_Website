<?php
   require_once 'admin-functions.php';
   require '../scripts/conn.php';
      
/*
*	php code to check if form has been submitted.
*	If true, then connect to the database and input the data.
*
*
*/

if(isset($_POST['submit'])){
	
	// check if all fields have been entered
	if( $_POST['accountType'] == "" ||
		$_POST['RewardType'] == "" ||
		$_POST['Cardtype'] == "" ||
		$_POST['cardname'] == "" ||
		$_POST['offer'] == "" ||
		$_POST['glance'] == "" ||
		$_POST['fee'] == "" ){

			echo "<script>alert('Please enter all fields')</script>";
			
	}else{
		
		try{
			// create connection
			$conn = mysqli_connect($servername,$username,$password,$dbname);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}	
			
			$query = "INSERT INTO `Account_Types`(`i_value`, `reward_type`,`type_of_perks`, `card_type`, `card_name`,
												 `new_member_offer`, `at_a_glance`,`features`, `annual_fee`) VALUES 
												('{$_POST['accountType']}', '{$_POST['RewardType']}', 
												'{$_POST['perk']}','{$_POST['Cardtype']}', '{$_POST['cardname']}',
												'{$_POST['offer']}', '{$_POST['glance']}', '{$_POST['features']}',
												'{$_POST['fee']}')";
			$result = mysqli_query($conn, $query);
			
			echo "<h4>The new account has been added to the database</h4>";
			
		} catch(Exception $e ){
			echo "<script>alert('Connection failed: ')</script>";
		}
							
		// close database connection
		mysqli_close($conn);
	}
}	
	  
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Account Types</title>
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

                <h1>Add an Account Type</h1>
					<hr>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES);?>" method="post">
						
								<div  class="form-group row">
									<label for="accountname" class="col-sm-2 col-form-label">Account Type:</label>
									<div class="col-sm-6">
										<input name="accountType" id="accountType" class="form-control" value="">
									</div>
								</div>
					
								<!-- Reward Type  -->
								<div  class="form-group row">
									<label for="RewardType" class="col-sm-2 col-form-label">Reward Type:</label>
									<div class="col-sm-6">
										<input name="RewardType" id="RewardType" class="form-control" value="">
									</div>
								</div>
										
								<!-- Type of perk  -->
								<div  class="form-group row">
									<label for="perk" class="col-sm-2 col-form-label">Type of Perk:</label>
									<div class="col-sm-6">
										<input name="perk" id="perk" class="form-control" value="">
									</div>
								</div>
											
								<!-- Card type  -->
								<div  class="form-group row">
									<label for="Cardtype " class="col-sm-2 col-form-label">Card Type:</label>
									<div class="col-sm-6">
										<input name="Cardtype" id="Cardtype" class="form-control" value="">
									</div>
								</div>
										
								<!-- Card Name  -->
								<div  class="form-group row">
									<label for="cardname" class="col-sm-2 col-form-label">Card Name:</label>
									<div class="col-sm-6">
										<input name="cardname" id="cardname" class="form-control" value="">
									</div>
								</div>
										
								<!-- New Member Offer -->
								<div  class="form-group row">
									<label for="offer" class="col-sm-2 col-form-label">New Members Offer:</label>
									<div class="col-sm-6">
										<input name="offer" id="offer" class="form-control" value="">
									</div>
								</div>
										
										
								<!-- AT a glance -->
								<div  class="form-group row">
									<label for="glance" class="col-sm-2 col-form-label">At a Glance:</label>
									<div class="col-sm-6">
										<input name="glance" id="glance" class="form-control" value="">
									</div>
								</div>
										
								<!-- Features -->
								<div  class="form-group row">
									<label for="features" class="col-sm-2 col-form-label">Features:</label>
									<div class="col-sm-6">
										<input name="features" id="features" class="form-control" value="">
									</div>
								</div>
								
								<!-- Annual Fee-->
								<div  class="form-group row">
									<label for="fee" class="col-sm-2 col-form-label">Annual Fee:</label>
									<div class="col-sm-6">
										<input name="fee" id="fee" class="form-control" value="">
									</div>
								</div>
							<hr>
							
						<div class="submit">
							<input class="btn btn-secondary btn-lg" type="button" onclick="location.href='admin-account-types.php'" value="Cancel" />
							<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
						</div>
					</form>
				<hr>
				</section>
			</div>
					
		
		
    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>
    
</body>

</html>