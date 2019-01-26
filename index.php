<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Homepage</title>
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
        <div class="jumbotron mb-5" id="home-bg-img">
            <div class="container">
                <section id="cta" class="col-sm-12 col-md-5 offset-md-0 bg-panel-b p-sm-5 p-4">

                    <h2>We are more than just a Bank</h2>
                    <p class="my-4">We're insurance, technology, investment and banking.</p>
                    <a href="find-a-service.php" class="btn btn-primary btn-lg">Help us find you the right service</a>

                </section>
            </div>
        </div>

        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background">
            <div class="container">
                <div class="row" id="front-help">

                    <div class="col mb-sm-0 mb-3">
                        <div class="bg-third p-sm-5 p-4">
                            <div class="">
                                <h2>Need help understanding your options?</h2>
                                <p>We have you covered with a load of information around the basics from</p>
                                <ul>
                                    <li>Investing</li>
                                    <li>Index funds</li>
                                    <li>Credit types</li>
                                </ul>
                                <a href="services.php" class="btn btn-primary btn-lg">Find out more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-sm-5 mb-3 p-sm-5 p-4">
                            <h3>Technology</h3>
                        </div>
                        <div class="p-sm-5 p-4">
                            <h3>Security</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background my-sm-5 my-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 p-sm-5 p-4 bg-third">
                        <h2>We help people every day</h2>
                        <p>Find out how we help them achieve their goals, manage their finances, and make decisions that work for them.</p>
                        <a href="services.php" class="btn btn-primary btn-lg">Find out more</a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="media/handsome-man-coffee-flipped.png" class="img-fluid" alt="...">
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>


    <!-- Loading scripts last -->
    <?php scripts(); ?>

</body>

</html>