<?php
   require_once 'scripts/functions.php';
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
                <form class="row p-3">
                    <div class="col-2 pr-2 p-0 py-2">
                        <label for="card-type-dc">I'm looking for a?</label>
                        <select id="card-type-dc" name="card-type-dc">
                            <option value="select">Select</option>

                            <option value="credit">Credit card</option>

                            <option value="debit">Debit card</option>

                        </select>
                    </div>
                    <div class="col-2 p-2">
                        <label for="card-type-interest">I'm interested in?</label>
                        <select id="card-type-interest" name="card-type-interest">

                            <option value="select">Select</option>

                            <option value="rewards-types">Rewards and perks</option>
                            <option value="saving">Saving money</option>
                            <option value="ease">Ease of use</option>

                        </select>
                    </div>

                    <!-- Question layer 2 reward types -->
                    <div class="col-2 p-2" id="reward-types">
                        <label for="card-type-reward-types">Reward types?</label>
                        <select id="card-type-reward-types" name="card-type-reward-types">

                            <option value="select">Select</option>

                            <option value="cash-back">Cash Back</option>
                            <option value="travel">Travel</option>
                            <option value="flexible">Flexible</option>

                        </select>
                    </div>

                    <!-- Question layer 2 saving money -->
                    <div class="col-2 p-2" id="saving">
                        <label for="card-type-saving">Saving money</label>
                        <select id="card-type-saving" name="card-type-saving">

                            <option value="select">Select</option>
                            <option value="high-interest">High interest</option>
                            <option value="low-fees">Low Account fees</option>

                        </select>
                    </div>

                    <!-- Question layer 2 reward types -->
                    <div class="col-2 p-2" id="ease">
                        <label for="card-type-ease">I'll use this for</label>
                        <select id="card-type-ease" name="card-type-ease">

                            <option value="select">Select</option>
                            <option value="online">Shopping online</option>
                            <option value="instore">Shopping instore</option>

                        </select>
                    </div>
                <div class="col-2 submit pt-4 align-item-bottom">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit-card" value="Submit">
                </div>
                </form>
            </div>
        </div>



        <div class="full-width-background my-5">
            <div class="container">
                <h3>For after a user has found a product they are interested in</h3>
                <?php booking_form(); ?>
            </div>
        </div>



    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>

</body>

</html>
