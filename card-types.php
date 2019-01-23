<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Card Types</title>
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

                <h1>Card types we offer</h1>
            </section>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <h2>Looking for a credit or debit card?</h2>
                        <p>We offer a number of card types to suit your needs</p>
                    </div>

                </div>
                <div id="credit" class="row">
                    <div class="col">
                        <h2>Credit Card</h2>
                        <p>We have a range of credit cards to suit your needs. Browse them below or visit or Card wizard to find the one right for you.</p>
                    </div>
                </div>

                <div id="debit" class="row">
                    <div class="col">
                        <h2>Debit Card</h2>
                        <p>For when you need an easy way to pay without the hassle of worrying about credit. Browse them below or visit or Card wizard to find the one right for you.</p>
                    </div>
                </div>

                <div id="travel-money" class="row">
                    <div class="col">
                        <h2>Travel money Card</h2>
                        <p>Planning a trip overseas? Our travel money cards take the hassle out of travelling! Browse them below or visit or Card wizard to find the one right for you.</p>
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
