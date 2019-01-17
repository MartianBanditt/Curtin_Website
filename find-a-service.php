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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>


    </style>
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
            </div>
        </div>

    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <!-- Footer should be consistent across pages so rendered from php file -->
    <div class="full-width-background bg-blue mt-5 p-5">

        <?php footer(); ?>

    </div>

    <!-- Loading scripts last -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
