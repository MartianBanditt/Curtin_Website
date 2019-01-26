<?php
// Stylesheets
function style_sheets(){
    echo <<<STYLESHEETS
    
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600|Open+Sans" rel="stylesheet">
STYLESHEETS;
}
// Header content
function header_content(){
    echo <<<HEADERCONTENT
        <div class="row">
            <div class="col my-5">
                <img src="../media/nationwideslogan.png" alt="nationwide logo">
            </div>
        </div>
HEADERCONTENT;
}
// main navigation
function main_nav(){
    echo <<<NAV
    <div class="nav-background">
     <nav class="navbar navbar-expand-lg navbar-dark container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../services.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../account-types.php">Account types</a>
                            <a class="dropdown-item" href="../card-types.php">Card Types</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about-us.php">About-us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../find-a-service.php">Find a service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact us</a>
                    </li>
                </ul>
            <form class="form-inline">
                <input class="form-control search mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
        </div>
NAV;
}
// footer content
function footer(){
    echo <<<FOOTER
        <div class="full-width-background bg-darkest-blue mt-5 p-sm-5 p-3">
            <div class="container">
                <footer>
                    <h3>Follow Us</h3>
                    <div class=font-awesome>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="row mt-5">
                    <div class="col">
                        <ul class="nav nav-bottom">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cookies</a>
                            </li>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="">© 2019 Nationwide ABN 11 123 123 123</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
FOOTER;
}
// javascript files for footer navigation
function scripts(){
    echo <<<SCRIPTS
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    
SCRIPTS;
}

function menu(){
	echo <<<MAINMENU
	
	<hr>
				
		<div class="submit">
			<p>
				<input class="btn btn-primary btn-lg" 
					   type="submit" 
					   name="Account Types" 
					   value="Account Types                       "
					   onclick="location.href='admin-account-types.php';"/>
			</p>
		</div>
														
		<div class="submit">
			<p>
				<input class="btn btn-primary btn-lg" 
					   type="submit" 
					   name="Card Types" 
					   value="Card Types                             "
					   onclick="location.href='admin-card-types.php';"/>
			</p>		
			
		</div>
		
		<div class="submit">
			<p>
				<input class="btn btn-primary btn-lg" 
					   type="submit" 
					   name="Booking Details" 
					   value="Booking Details                     "
					   onclick="location.href='admin-booking-details.php';"/>
			</p>		
			
		</div>
		
		<div class="submit">
			<p>
				<input class="btn btn-primary btn-lg" 
					   type="submit" 
					   name="Questions" 
					   value="Questionnaires                      "
					   onclick="location.href='admin-questions.php';"/>
			</p>		
			
		</div>
		
		<div class="submit">
			<p>
				<input class="btn btn-secondary btn-lg" 
					   type="submit" 
					   name="Add an Account Type" 
					   value="Exit Website Administration"
					   onclick="location.href='../index.php';"/>
			</p>		
			
		</div>
	<hr>
	
MAINMENU;
}

function mainMenuButton() {
	echo <<<GOTOMENU
		<div class="submit">
			<p>
				<input class="btn btn-secondary btn-lg" 
					   type="submit" 
					   name="Main Menu" 
					   value="Main Menu"
					   onclick="location.href='index.php';"/>
			</p>
		</div>

GOTOMENU;
	
}

function add_account(){
	echo <<<ADD
		<div class="submit">
			<p>
				<input class="btn btn-primary btn-lg" 
					   type="submit" 
					   name="Add an Account" 
					   value="Add an Account"
					   style="float:right;"
					   onclick="location.href='add_account.php';"/>
			</p>
		</div>
	
ADD;
}

function cancel() {
	echo <<<CANCEL
		<div class="submit">
			<p>
				<input class="btn btn-secondary btn-lg" 
					   type="submit" 
					   name="cancel" 
					   value="Cancel"
					   onclick="location.href='admin-account-types.php';"/>
			</p>
		</div>
	
CANCEL;
}


function resume() {
	echo <<<RESUME
		<div class="submit">
			<p>
				<input class="btn btn-secondary btn-lg" 
					   type="submit" 
					   name="RESUME" 
					   value="RESUME"
					   onclick="location.href='admin-account-types.php';"/>
			</p>		
			
		</div>
		
RESUME;
}

function resume_bookings() {
	echo <<<RESUME
		<div class="submit">
			<p>
				<input class="btn btn-secondary btn-lg" 
					   type="submit" 
					   name="RESUME" 
					   value="RESUME"
					   onclick="location.href='admin-booking-details.php';"/>
			</p>		
			
		</div>
		
RESUME;
}

?>