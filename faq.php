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
            <section id="title" class="container">

                <h1>Frequently asked questions</h1>
            </section>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <h2>What do I need to know?</h2>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <h2>Investing</h2>
                        <p>How, why and what to invest in.</p>
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
