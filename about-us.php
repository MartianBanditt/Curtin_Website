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

                <h1>About Us</h1>
            </section>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <h2>Our History</h2>
                        <p>Nationwide is a mutual building society that provides a large range of financial services. Owned by and run for the benefit of its members, Nationwide has positioned itself as different from other banks with trust at its core.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-8">
                        <h2>What makes us different?</h2>
                        <p>When you choose a product/service with Nationwide you also become a member of Nationwide. Because we are owned and run by our members this means you have a say in how we operate and help inform decisions that will impact you.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-4 p-3 p-md-5 no-gutters bg-third">
                        <div class="row">
                            <div class="col-4">
                                <span class="fa-large"><i class="fas fa-award"></i></span>
                            </div>
                            <div class="col">
                                <h5>We're Number one for customer satisfaction</h5>
                                <p>For the last 5 years we have placed first for customer satisfaction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 p-3 p-md-5  no-gutters bg-third">
                        <div class="row">
                            <div class="col-34">
                                <span class="fa-large"><i class="fas fa-hands-helping"></i></span>
                            </div>
                            <div class="col">
                                <h5>Run for the benifit of our members</h5>
                                <p>We are run directly for the benifit of you our members.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 p-3 p-md-5  no-gutters bg-third">
                        <div class="row">
                            <div class="col-4">
                                <span class="fa-large"><i class="fas fa-bullhorn"></i></span>
                            </div>
                            <div class="col">
                                <h5>You get a say</h5>
                                <p>As a member you can help shape our policies and move us in a direction you like,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class=" full-width-background mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <h2>What we do</h2>
                        <p>We're banking, investment, financial services and advice, contacts, credit cards and so much mroe.</p>
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
