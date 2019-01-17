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
    <div class="full-width-background">
        <?php main_nav(); ?>
    </div>

    <main>
        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background">
            <section id="header" class="container">

                <h1>Card types we offer</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">

                    <div class="col">
                                            <h2>Looking for a credit or debit card?</h2>
                        <p>We offer a number of card types to suit your needs</p>
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
