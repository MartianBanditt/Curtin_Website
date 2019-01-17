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
                        <a href="tel:1300000000" class="btn btn-primary .btn-lg">1300 000 000</a>
                    </div>
                    <div class="col">
                        <h3>Email</h3>
                        <a href="mailto:nationwidedummyemail@email.com" class="btn btn-primary .btn-lg">nationwidedummyemail@email.com</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col">

                        <h3>Or use the form below</h3>
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
