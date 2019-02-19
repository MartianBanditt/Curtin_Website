<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Services</title>
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

                <h1>Our products</h1>
            </section>
        </div>

        <div class="full-width-background mb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Products we offer</h2>
                        <p>Nationwide has a wide range of products to suit your needs!</p>
                    </div>

                </div>
            </div>
        </div>


        <div class="full-width-background bg-third py-5">
            <div class="container">
                <div class="row no-gutters products-cards box-shadow-box">
                    <div class="col-sm-12 col-md-6 bg-white p-sm-5 p-4">
                        <h2>Debit cards</h2>
                        <p>We offer a range of debit cards to suit your needs:</p>
                        <ul>
                            <li>Low account fees</li>
                            <li>Easy use and access</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 bg-white p-sm-5 p-4">
                        <h3>Credit cards </h3>
                        <p>Need a bit more flexibility? Our credit cards have you covered:</p>
                        <ul>
                            <li>Low rate</li>
                            <li>Greate cash back and member rewards</li>
                            <li>Interest free for 60 days(depending on the card)</li>
                        </ul>
                    </div>
                </div>
                <div class="my-5 text-center">
                    <h2>Use our card selector to find the right card for you</h2>
                    <p><a href="find-a-service.php" class="btn btn-primary btn-lg text-center">Find the right card</a></p>
                </div>
            </div>
        </div>
        <div class="full-width-background mt-sm-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 my-sm-3 p-5">
                        <div class="title-border-red">
                            <h2>Financial technology</h2>
                            <p class="mb-0">Bank on your phone with the Nationwide smarthphone app and leave your card at home. Supported at all Nationwide atms.</p>
                            <p><a href="fin-tech.php" class="btn btn-primary btn-lg text-center">Find out more</a></p>
                        </div>
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
