<?php
// Stylesheets
function style_sheets(){
    echo <<<STYLESHEETS
        <!-- favons at various sizes -->
        <link rel="apple-touch-icon" sizes="180x180" href="media/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="media/favicon-16x16.png">
        <!-- Stylsheets for inclusion -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">    
        <!-- Webfonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600%7COpen+Sans" rel="stylesheet">
STYLESHEETS;
}
// Header content
function header_content(){
    echo <<<HEADERCONTENT
        <div class="row">
            <div class="col my-5">
                <a href="index.php">
                    <img src="media/nationwideslogan.png" alt="nationwide logo">
                </a>
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
                    <li class="nav-item pr-sm-3 py-sm-0 py-3 active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown px-sm-3 py-sm-0 py-3">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="our-products.php">Our products</a>                         
                            <a class="dropdown-item" href="fin-tech.php">Financial tech</a>
                            <a class="dropdown-item" href="card-types.php">Card Types</a>
                        </div>
                    </li>
                    <li class="nav-item px-sm-3 py-sm-0 py-3">
                        <a class="nav-link" href="find-a-service.php">Card Selector</a>
                    </li>
                    <li class="nav-item px-sm-3 py-sm-0 py-3">
                        <a class="nav-link" href="faq.php">Faq</a>
                    </li>
                    <li class="nav-item px-sm-3 py-sm-0 py-3">
                        <a class="nav-link" href="about-us.php">About-us</a>
                    </li>
                    <li class="nav-item px-sm-3 py-sm-0 py-3">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                </ul>
            <form class="form-inline">
                <input class="form-control search d-inline-block mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success d-inline-block my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
    </div>
NAV;
}
// footer content
function footer(){
    $date = date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
    echo <<<FOOTER
    <div class="full-width-background bg-fourth mt-5">
        <div class="container p-5">
        <h2 class="text-center p-3">We're here to help</h2>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div><span class="fa-cta-front"><i class="fas fa-microphone"></i></span></div>
                    <span>Talk to one of our experts</span>
                    <div class="mt-4">
                        <a href="contact.php" class="btn btn-primary btn-lg"><span>Contact</span></a>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-4 mt-5 m-sm-0 text-center">
                    <div><span class="fa-cta-front"><i class="fas fa-phone"></i></span></div>
                    <span>Call <a href="tel:133000">13 00 00</a></span>
                    <p>Mon-Fri 9am - 5pm (AEST/ADST)
                    <br>Sat-Sun 9am - 5pm (AEST/ADST)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="full-width-background bg-darkest-blue p-sm-5 p-3">
        <div class="container">
            <footer>
                 <h3>Follow Us</h3>
                <div class="font-awesome">
                    <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                    <a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
                    <a href="http://www.youtube.com"><i class="fab fa-youtube-square"></i></a>
                    <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
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
    <div class="full-width-background bg-darkest-blue p-sm-5 p-3">
        <div class="container">
            <div>&copy;<script>document.write(new Date().getFullYear()); </script> Jason Lane, James Eastoe-Collins. Last modified $date</div>
            <div>Disclaimer: This website is not a real website and is been created as part of an assignment in an approved course of study for CurtinUniversity and contains copyright material not created by the author. All copyright material usedremains copyright of the respective owners and has been used here pursuant to Section 40 of theCopyright Act 1968 (Commonwealth of Australia). No part of this work may be reproduced withoutconsent of the original copyright owners. See code comments for references.</div>
         </div>
     </div>
FOOTER;
}
// javascript files for footer navigation
function scripts(){
    echo <<<SCRIPTS
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
SCRIPTS;
}
function contact_form(){
    echo <<<CONTACTFORM
    
        <!-- Customer details and payment details form section -->
        <form class="form" action="scripts/email_form.php" method="post">
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
                    <label for="cust-mobile">Mobile</label>
                    <input name="cust-mobile" class="form-control" type="tel" id="cust-mobile" placeholder="" />
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
                    <textarea class="form-control form-textarea" id="cust-message" name="cust-message" rows="5" cols="60"></textarea>
                </div>
            </fieldset>
            <div class="submit">
                <input class="btn btn-primary btn-lg" type="submit" name="order" value="Submit">
            </div>
        </form>
    
CONTACTFORM;
}
function booking_form(){
    $date = date('Y-m-d');
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
                    <label for="mobile">Mobile</label>
                    <input name="mobile" class="form-control" type="tel" id="mobile" placeholder="" />
                </div>
                <div class="select-box form-group">
                    <label for="date">Date</label>
                    <input name="date" class="form-control booking-date" type="date" id="date" min="$date" required />
                </div>
                
                
                <div class="select-box form-group">
                    <label for="time">Time</label>
                    <select class="form-control" name="time" id="time">
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
            </fieldset>
            <div class="submit">
                <input class="btn btn-primary btn-lg" type="submit" name="order" value="Order">
            </div>
        </form>
    
BOOKINGFORM;
    
}
function card_types($cardName,$aquery){
    $cardType;
    if ($aquery == null){
        $cardType = "SELECT * FROM `Account_Types` WHERE card_type = '$cardName'";
    }else{
        $cardType = $aquery;
    }
    global $conn;
    $cards = mysqli_query($conn, $cardType);
    if(!empty($_POST) && mysqli_num_rows($cards) == 0){
        echo '<h2 class="warning">Sorry we couldnt find any cards<h2>';
    }
    // Loops through the cards and outputs Card names as headers
    // href needs to match to a tab-pane
    // The first should have a class of active but I can always do that with a bit of css or jquery later
    echo "<div class='list-group row-type mb-0' role='tablist'>";
        $id = 'card';
        $displayfirst = 1;
        while ($row = $cards->fetch_array()){
            echo '<a class="list-group-item list-group-item-action cards'.($displayfirst == 1 ? "show active" : "").'" data-toggle="list" href="#'.$id.$row['id'].'" role="tab">'.$row["card_name"].'</a>';
            $displayfirst=2;
        }
    echo "</div>";
    mysqli_data_seek($cards, 0);
    $id = 'card';
    // Loops through the card types and outputs fields to a display box
    echo '<div class="tab-content">';
    $invis=1;
        while ($row = $cards->fetch_array()){
            echo '<div class="tab-pane p-sm-5 p-3 bg-fourth '.($invis == 1 ? "show active" : "").'" id="'.$id.$row['id'].'" role="tabpanel">';
                echo '<h3>'.$row["card_name"].'</h3>';
                echo '<div class="row my-4">';
                    echo '<div class="col-md-4 col-12">';
                        echo '<h4>At a glance:</h4>';
                        echo '<p>'.$row["at_a_glance"].'</p>';
                    echo "</div>";
                    echo "<div class='col-md-4 col-12'>";
                        echo "<h4>New Member Offer:</h4>";
                        echo '<p>'.$row["new_member_offer"].'</p>';
                    echo "</div>";
                    echo "<div class='col-md-4 col-12'>";
                        echo "<h4>Features:</h4>";
                        echo '<p>'.$row["features"].'</p>';
                    echo "</div>";
                echo "</div>";
                echo '<div class="row my-4">';
                    echo "<div class='col-sm-4 col-12'>";
                        echo "<h5>Annual Fees</h5>";
                        echo '<p>'.$row['annual_fee'].'</p>';
                    echo "</div>";
                    echo "<div class='col-sm-4 col-9'>";
					   echo '<img alt="Credit Card example" class="card-image" src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>';
                    echo "</div>";
                echo '</div>';
            echo "</div>";
            $invis=2;
        }
    echo '</div>';
}
function card_selector($card){
    if (!empty($_POST["card-type-dc"])){
        $card_type1 = $_POST["card-type-dc"];
    }
    $i_value = "";
    $reward_type = "";
    $type_of_perks = "";
    if(!empty($_POST)){
    if($_POST["card-type-interest"] == "rewards-types" and !empty($_POST["card-type-interest"])){
        $i_value = "Rewards and Perks";
    } elseif($_POST["card-type-interest"] == "saving" and !empty($_POST["card-type-interest"])){
        $i_value = "Saving Money";
    }elseif($_POST["card-type-interest"] == "ease" and !empty($_POST["card-type-interest"])){
        $i_value = "ease";
    }
    if($_POST["card-type-reward-types"] == "reward-cash-back" and !empty($_POST["card-type-reward-types"])){
        $reward_type = "Cash Back";
    } elseif($_POST["card-type-reward-types"] == "reward-travel" and !empty($_POST["card-type-reward-types"])){
        $reward_type = "Travel";
    }elseif($_POST["card-type-reward-types"] == "reward-flexible" and !empty($_POST["card-type-reward-types"])){
        $reward_type = "Flexible";
    }elseif($_POST["card-type-saving"] == "high-interest" and !empty($_POST["card-type-saving"])){
        $reward_type = "High Interest";
    }elseif($_POST["card-type-saving"] == "low-fees" and !empty($_POST["card-type-saving"])){
        $reward_type = "Low Account Fees";
    }elseif($_POST["card-type-ease"] == "low-fees" and !empty($_POST["card-type-ease"])){
        $reward_type = "Shopping Online";
    }elseif($_POST["card-type-ease"] == "low-fees" and !empty($_POST["card-type-ease"])){
        $reward_type = "Shopping In-Store";
    }
    if($_POST["travel"] == "flights" and !empty($_POST["travel"])){
        $type_of_perks = "Flights";
    }elseif($_POST["travel"] == "hotels" and !empty($_POST["travel"])){
        $reward_type = "Hotels";
    }
    if (!empty($type_of_perks)){
        return $cardType = "SELECT * FROM `Account_Types` WHERE card_type = '$card_type1' AND i_value = '$i_value' AND reward_type = '$reward_type' AND type_of_perks = '$type_of_perks'";
    }elseif(!empty($reward_type)){
        return $cardType = "SELECT * FROM `Account_Types` WHERE card_type = '$card_type1' AND i_value = '$i_value' AND reward_type = '$reward_type'";
    }else{
        return $cardType = "SELECT * FROM `Account_Types` WHERE card_type = '$card_type1' AND i_value = '$i_value'";
    }
    }
}
?>
