<!-- Move this to a function file -->
<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Homepage</title>
    <!-- bootstrap styles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

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
        <div class="jumbotron" id="home-bg-img">
            <div class="container">
                <section id="cta" class="col-sm-12 col-md-4 offset-md-1 bg-panel-b p-5">

                    <h2>We are more than just a Bank</h2>
                    <p>We're insurance, technology, investment and banking.</p>
                    <a href="/questionaires" class="btn btn-primary .btn-lg">Help us find you the right service</a>
                    <a href="/contact" class="btn btn-secondary .btn-lg">Talk to us</a>

                </section>
            </div>
        </div>

        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background">
            <div class="container">
                <div class="row mgtb-4">

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
    <div class="full-width-background bg-blue mt-5 p-5">

        <?php footer(); ?>

    </div>

    <!-- Loading scripts last -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
