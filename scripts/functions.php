<?php

// Stylesheets
function style_sheets(){
    echo <<<STYLESHEETS
    
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">

STYLESHEETS;
}

// Header content
function header_content(){
    echo <<<HEADERCONTENT

        <div class="row">
            <div class="col my-5">
                <img src="media/nationwideslogan.png" alt="nationwide logo">
            </div>
            <div class="col align-self-center">
                <div>Social media <a href="facebook.com">facebook</a> - <a href="twitter.com">Twitter</a></div>
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
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="account-types.php">Account types</a>
                            <a class="dropdown-item" href="card-types.php">Card Types</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About-us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="find-a-service.php">Find a service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>

                </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
    
        <div class="container">
            <footer>
                <div>This is the footer</div>
            </footer>
        </div>

FOOTER;
}

// javascript files for footer navigation
function scripts(){
    echo <<<SCRIPTS
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
SCRIPTS;
}

function contact_form(){
    echo <<<CONTACTFORM
    
        <!-- Customer details and payment details form section -->
        <form class="form" action="" method="post">
            <fieldset class="form-section customer-details">
                <legend>Your details</legend>
                
                <div class="text-area form-group">
                    <label for="cust-name">Your Name</label>
                    <input name="cust-name" class="form-control" type="text" id="cust-name" pattern="[A-Za-z _.,-]{1,50}" title="Please only enter the Alphabet, spaces and .,- characters" placeholder="Your name..." required />
                </div>

                <div class="email form-group">
                    <label for="cust-email">Your email</label>
                    <input name="cust-email" class="form-control" type="email" id="cust-email" placeholder="Email we can contact you on." required />
                </div>

                <div class="mobile form-group">
                    <label for="cust[mobile]">Mobile</label>
                    <input name="cust[mobile]" class="form-control" type="tel" id="cust-mobile" placeholder="" />
                </div>

                <div class="select-box form-group">
                    <label for="enquiry-type">Type of enquiry</label>
                    <select name="enquiry-type" class="form-control" id="enquiry-type">
                        <option value="" selected="selected">Please Select</option>
                        <option value="enquiry">Enquiry</option>
                        <option value="compliment">Compliment</option>
                        <option value="complaint">Complaint</option>
                    </select>
                </div>

                <div class="text-area form-group">
                    <label for="cust-message">Message</label>
                    <textarea class="form-control" id="cust-message" name="cust-message" rows="5" cols="60" class="form-textarea"></textarea>
                </div>
            </fieldset>

            <div class="submit">
                <input class="btn btn-primary btn-lg" type="submit" name="order" value="Order">
            </div>
        </form>
    
CONTACTFORM;
}

function booking_form(){
    echo <<<BOOKINGFORM
    
        <!-- Customer details and payment details form section -->
        <form class="form" action="" method="post">
            <fieldset class="form-section customer-details">
                <legend>Make a booking</legend>
                
                <div class="text-area form-group">
                    <label for="cust-name">Your Name</label>
                    <input name="cust-name" class="form-control" type="text" id="cust-name" pattern="[A-Za-z _.,-]{1,50}" title="Please only enter the Alphabet, spaces and .,- characters" placeholder="Your name..." required />
                </div>

                <div class="email form-group">
                    <label for="cust-email">Your email</label>
                    <input name="cust-email" class="form-control" type="email" id="cust-email" placeholder="Email we can contact you on." required />
                </div>

                <div class="mobile form-group">
                    <label for="cust[mobile]">Mobile</label>
                    <input name="cust[mobile]" class="form-control" type="tel" id="cust-mobile" placeholder="" />
                </div>

                <div class="select-box form-group">
                    <label for="seats[STA]">Adults</label>
                    <select name="seats[STA]" id="seats[STA]">
                        <option value="" selected="selected">Please Select</option>
                        <option value="9">9:00am</option>
                        <option value="10">10:00am</option>
                        <option value="11">11:00am</option>
                        <option value="12">12:00pm</option>
                        <option value="13">1:00pm</option>
                        <option value="14">2:00pm</option>
                        <option value="15">3:00pm</option>
                        <option value="16">4:00pm</option>
                        <option value="17">5:00pm</option>
                    </select>
                </div>

            <div class="submit">
                <input class="btn btn-primary btn-lg" type="submit" name="order" value="Order">
            </div>
        </form>
    
BOOKINGFORM;
    
}
?>
