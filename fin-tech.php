<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Account Types</title>
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

                <h1>Financial Tech</h1>
            </section>
        </div>

        <div class="full-width-background">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Financial Tech</h2>
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