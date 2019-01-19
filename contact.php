<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Contact us</title>
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

                <h1>Contact us</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>We're here to help</h2>
                        <p>What ever you need, one of trained (something)? is here and waiting to here from you.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <h3>Call us</h3>
                        <a href="tel:1300000000" class="btn btn-primary btn-lg">1300 000 000</a>
                    </div>
                    <div class="col">
                        <h3>Email</h3>
                        <a href="mailto:nationwidedummyemail@email.com" class="btn btn-primary btn-lg">nationwidedummyemail@email.com</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col">

                        <h3>Or use the form below</h3>
                        <?php contact_form(); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <!-- Footer should be consistent across pages so rendered from php file -->
    <div class="full-width-background bg-blue mt-5 p-5">

        <?php footer(); ?>

    </div>

    <!-- Loading scripts last -->
    <?php scripts(); ?>
    
</body>

</html>
