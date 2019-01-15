<!-- Move this to a function file -->
<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide</title>
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
        <div class="hero">
            <section id="cta" class="container">

                <h2>We are more than just a Bank</h2>
                <p>We're insurance, technology, investment and banking.</p>
                <a href="/questionaires" class="btn btn-primary .btn-lg">Help us find you the right service</a>
                <a href="/contact" class="btn btn-secondary .btn-lg">Talk to us</a>

            </section>
        </div>

        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div>
                            <h2>Need help understanding your options</h2>
                            <p>We have you covered with a load of information around the basics from</p>
                            <ul>
                                <li>Investing</li>
                                <li>Index funds</li>
                                <li>Credit types</li>
                            </ul>
                            <a href="/basics" class="btn btn-primary .btn-lg">Find out more</a>
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <h3>Technology</h3>
                        </div>
                        <div>
                            <h3>Security</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background">
            <div class="container">
                <h2>We help people every day</h2>
                <p>Find out how we help them achieve their goals, manage their finances, and make decisions that are best for them.</p>
                <a href="/basics" class="btn btn-primary .btn-lg">Find out more</a>

            </div>
        </div>

    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <div class="full-width-background">

        <?php footer(); ?>

    </div>

    <!-- Loading scripts last -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
