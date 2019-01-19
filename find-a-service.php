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
        <div class="full-width-background">
            <section id="header" class="container">

                <h1>Find a product or service</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <h2>Help us find you a product or service</h2>
                        <p>Choose what matters to you the most and we'll find a product that matches you</p>
                    </div>

                </div>

                <?php booking_form(); ?>
            </div>
        </div>



    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <div class="full-width-background bg-blue mt-5 p-5">

        <?php footer(); ?>

    </div>

    <!-- Loading scripts last -->
    <?php scripts(); ?>

</body>

</html>
