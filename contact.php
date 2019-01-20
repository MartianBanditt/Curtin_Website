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
        <div class="full-width-background title">
            <section id="title" class="container">

                <h1>Contact us</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">
                    <div class="col my-5 p-sm-5">
                        <h2>We're here to help</h2>
                        <p>What ever you need, one of trained customer service representatives is here and waiting to here from you.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row mb-sm-5 mb-3">

                    <div class="col bg-primary mb-sm-0 mb-3 p-sm-5 p-3 text-white">
                        <h3>Customer Service</h3>
                        <p>Have a question about our products or services? Or want to leave us feedback, good or bad?</p>
                        <p>Our team is here to listen and provide answers.</p>
                    </div>
                    <div class="col bg-third p-sm-5 p-3">
                        <h4>Call us</h4>
                        <a href="tel:1300000000" class="btn btn-primary btn-lg">1300 000 000</a>
                        <p>Business hours: 9 am - 5 pm weekdays</p>
                        
                        <h4>Email us</h4>
                        <a href="mailto:nationwidedummyemail@email.com" >nationwidedummyemail@email.com</a>
                        
                        <h4>Send us a letter</h4>
                        <p>1, Nationwide, Nation st, UK, 39992</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col col-md-6 bg-third p-sm-5 p-3">

                        <?php contact_form(); ?>
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
