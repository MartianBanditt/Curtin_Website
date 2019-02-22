<?php
    require 'scripts/conn.php';
    require_once 'scripts/functions.php';

    if(isset($_POST)){
        $aquery = card_selector(0, $_POST);
    }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Find a service</title>
    <!-- bootstrap styles -->
    <?php style_sheets(); ?>

</head>

<body>

    <!-- header starts here -->
    <header class="container">
        <?php header_content(); ?>
    </header>

    <!-- main navigation -->
    <?php main_nav(); ?>

    <main>
        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background title">
            <section id="title" class="container">
                <h1>Find a product or service</h1>
            </section>
        </div>


        <div class="jumbotron" id="card-hero">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-7 offset-md-0 p-sm-5 p-4">
                        <h2>Finding the right product or service can be tricky</h2>
                        <p>That's why we've made it easy by allowing you to tell us what matters most to you and how you want to use our services.</p>
                        <p>Pick from the options below and you'll match with the right product.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width-background py-5 bg-third">
            <div class="container">
                <form class="row card-selector p-3" action="find-a-service.php" method="post">
                    <div class="col-sm-2 col-12 pr-2 p-0 py-2">
                        <label for="card-type-dc">I'm looking for a?</label>
                        <select id="card-type-dc" name="card-type-dc" required>
                            <option value="">Select</option>

                            <option value="Credit Card">Credit card</option>

                            <option value="Debit">Debit card</option>

                        </select>
                    </div>
                    <div class="col-sm-2 col-12 p-2">
                        <label for="card-type-interest">I'm interested in?</label>
                        <select id="card-type-interest" name="card-type-interest" required>

                            <option value="">Select</option>

                            <option value="rewards-types">Rewards and perks</option>
                            <option value="saving">Saving money</option>
                            <option value="ease">Ease of use</option>

                        </select>
                    </div>

                    <!-- Question layer 2 reward types -->
                    <div class="col-sm-2 col-12 p-2 layer-2" id="rewards-types">
                        <label for="card-type-reward-types">Reward types?</label>
                        <select id="card-type-reward-types" name="card-type-reward-types">

                            <option value="select">Select</option>

                            <option value="reward-cash-back">Cash Back</option>
                            <option value="reward-travel">Travel</option>
                            <option value="reward-flexible">Flexible</option>

                        </select>
                    </div>

                    <!-- Question layer 2 saving money -->
                    <div class="col-sm-2 col-12 p-2 layer-2" id="saving">
                        <label for="card-type-saving">Saving money</label>
                        <select id="card-type-saving" name="card-type-saving">

                            <option value="select">Select</option>
                            <option value="high-interest">High interest</option>
                            <option value="low-fees">Low Account fees</option>

                        </select>
                    </div>

                    <!-- Question layer 2 reward types -->
                    <div class="col-sm-2 col-12 p-2 layer-2" id="ease">
                        <label for="card-type-ease">I'll use this for</label>
                        <select id="card-type-ease" name="card-type-ease">

                            <option value>Select</option>
                            <option value="online">Shopping online</option>
                            <option value="instore">Shopping instore</option>

                        </select>
                    </div>

                    <!-- Question layer 3 reward types -->
                    <div class="col-sm-2 col-12 p-2 layer-3" id="reward-travel">
                        <label for="travel">I'll use this for</label>
                        <select id="travel" name="travel">

                            <option value>Select</option>
                            <option value="flights">Flights</option>
                            <option value="hotels">Hotels</option>

                        </select>
                    </div>

                    <!-- Question layer 3 reward types -->
                    <div class="col-sm-2 col-12 p-2 layer-3" id="reward-flexible">
                        <label for="flexible">I'll use this for</label>
                        <select id="flexible" name="flexible">

                            <option value>Select</option>
                            <option value="travel-dining">Travel and dining</option>
                            <option value="travel-dining">Hotels</option>

                        </select>
                    </div>

                    <div class="col-sm-2 col-12 submit pt-4 align-item-bottom">
                        <input class="btn btn-primary btn-lg" type="submit" name="submit-card" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="full-width-background mt-5">
            <div class="container">

                <?php if(isset($_POST)){
                    card_types(0,$aquery);
                } ?>
            </div>
        </div>
        <?php if(!empty($_POST)){

        echo '<div class="full-width-background my-5">';
            echo '<div class="container">';
                echo '<h3>Make a booking to talk about getting a card</h3>';
                booking_form();
            echo '</div>';
        echo '</div>';
        }
        ?>



    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>

</body>

</html>
