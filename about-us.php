<!-- Move this to a function file -->
<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <section id="header" class="container">

                <h1>About Us</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">

                    <h2>Our History</h2>
                    <div class="col">
                    </div>
                </div>

            </div>

        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">
                    <h2>What makes us different?</h2>
                    <div class="col">
                    </div>
                </div>

            </div>

        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">
                    <h2>What we do</h2>
                    <div class="col">
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
