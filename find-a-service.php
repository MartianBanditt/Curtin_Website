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
        <div class="full-width-background title mb-5">
            <section id="title" class="container">

                <h1>Find a product or service</h1>
            </section>
        </div>


        <div class="full-width-background my-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 p-5 bg-third">
                        <h2>Finding the right product or service can be tricky</h2>
                        <p>That's why we've made it easy by allowing you to tell us what matters most to you and how you want to use our services.</p>
                        <p>Pick from the options below and you'll match with the right product.</p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="media/handsome-man-coffee-flipped.png" class="img-fluid" alt="Stock photo of handsome person, to be replaced">
                    </div>
                </div>
            </div>
        </div>

        <div class="full-width-background my-5 py-5 bg-third">
            <div class="container accordion" id="accordionExample">
                <!-- Question for user -->
                <div class="row">
                    <h2 class="text-center bg-dark text-light p-3 d-inline-block m-auto q-radius"><a href="#collapseOne" class="text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hi there! What type of card are you looking for today?</a></h2>
                </div>

                <div class="row justify-content-center mt-5 flex-width collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="col m-auto">
                        <button type="button" class="btn btn-circle" role="button" data-toggle="collapse" data-parent="#accordionExample" href="#collapseTwo" aria-expanded="false">Credit Card</button>
                    </div>
                    <div class="col m-auto">
                        <button type="button" class="btn btn-circle" role="button" data-toggle="collapse" data-parent="#accordionExample" href="#collapseTwo" aria-expanded="false">Debit Card</button>
                    </div>
                </div>

                <!-- Question for user -->
                <div class="row mt-5">
                    <h2 class="text-center bg-dark text-light p-3 d-inline-block m-auto q-radius"><a href="#collapseTwo" id="headingTwo" data-toggle="collapse" class="text-white collapsed" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What are you most interested in?</a></h2>
                </div>

                <div class="row justify-content-center mt-5 flex-width collapse" id="collapseTwo" aria-labelledby="headingTwo" aria-expanded="false" data-parent="#accordionExample">
                    <div class="col m-auto">
                        <button type="button" class="btn btn-circle">Rewards and perks</button>
                    </div>
                    <div class="col m-auto">
                        <button type="button" class="btn btn-circle">Saving money</button>
                    </div>
                    <div class="col m-auto">
                        <button type="button" class="btn btn-circle">Ease of use</button>
                    </div>
                </div>
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
