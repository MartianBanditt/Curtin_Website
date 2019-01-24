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
    <?php main_nav(); ?>

    <main>
        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background title">
            <section id="title" class="container">

                <h1>Card types we offer</h1>
            </section>
        </div>

        <div class="full-width-background mt-5">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <h2>Looking for a credit or debit card?</h2>
                        <p>We offer a number of card types to suit your needs</p>
                    </div>

                </div>

                <div id="credit-cards" class="my-5">
                    <div>
                        <h2>Credit Cards</h2>
                        <p>We have a range of credit cards to suit your needs. Browse them below or visit or Card wizard to find the one right for you.</p>
                    </div>

                    <!-- List group -->
                    <div class="list-group row-type mb-0" role="tablist">
                        <a class="list-group-item list-group-item-action cards active" data-toggle="list" href="#card-1" role="tab">Card Name</a>
                        <a class="list-group-item list-group-item-action cards" data-toggle="list" href="#card-2" role="tab">Card Name 2</a>
                        <a class="list-group-item list-group-item-action cards" data-toggle="list" href="#card-3" role="tab">Card Name 3</a>
                        <a class="list-group-item list-group-item-action cards" data-toggle="list" href="#card-4" role="tab">Card Name 4</a>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-sm-5 p-3 bg-fourth active" id="card-1" role="tabpanel">
                            <h3>$card_name</h3>
                            <div class="row my-4">
                                <div class="col">
                                    <h4>At a glance:</h4>
                                    <p>$at_a_glance</p>
                                </div>
                                <div class="col">
                                    <h5>New member offer:</h5>
                                    <p>$new_member_offer</p>
                                </div>
                                <div class="col">
                                    <h5>Features:</h5>
                                    <p>$features</p>
                                </div>
                            </div>
                            <div>
                                <h5>Annual fee: $annual-fee</h5>
                                <p>$0</p>
                            </div>
                        </div>
                        <div class="tab-pane p-sm-5 p-3 bg-fourth" id="card-2" role="tabpanel">
                            <h3>$card_name</h3>
                            <div class="row my-4">
                                <div class="col">
                                    <h4>At a glance:</h4>
                                    <p>$at_a_glance</p>
                                </div>
                                <div class="col">
                                    <h5>New member offer:</h5>
                                    <p>$new_member_offer</p>
                                </div>
                                <div class="col">
                                    <h5>Features:</h5>
                                    <p>$features</p>
                                </div>
                            </div>
                            <div>
                                <h5>Annual fee: $annual-fee</h5>
                                <p>$0</p>
                            </div>
                        </div>
                        <div class="tab-pane p-sm-5 p-3 bg-fourth" id="card-3" role="tabpanel">
                            <h3>$card_name</h3>
                            <div class="row my-4">
                                <div class="col">
                                    <h4>At a glance:</h4>
                                    <p>$at_a_glance</p>
                                </div>
                                <div class="col">
                                    <h5>New member offer:</h5>
                                    <p>$new_member_offer</p>
                                </div>
                                <div class="col">
                                    <h5>Features:</h5>
                                    <p>$features</p>
                                </div>
                            </div>
                            <div>
                                <h5>Annual fee: $annual-fee</h5>
                                <p>$0</p>
                            </div>
                        </div>
                        <div class="tab-pane p-sm-5 p-3 bg-fourth" id="card-4" role="tabpanel">
                            <h3>$card_name</h3>
                            <div class="row my-4">
                                <div class="col">
                                    <h4>At a glance:</h4>
                                    <p>$at_a_glance</p>
                                </div>
                                <div class="col">
                                    <h5>New member offer:</h5>
                                    <p>$new_member_offer</p>
                                </div>
                                <div class="col">
                                    <h5>Features:</h5>
                                    <p>$features</p>
                                </div>
                            </div>
                            <div>
                                <h5>Annual fee: $annual-fee</h5>
                                <p>$0</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="debit-card" class="my-5">
                    <div>
                        <h2>Debit Card</h2>
                        <p>For when you need an easy way to pay without the hassle of worrying about credit. Browse them below or visit or Card wizard to find the one right for you.</p>
                    </div>
                </div>

                <div id="travel-money-card" class="my-5">
                    <div>
                        <h2>Travel money Card</h2>
                        <p>Planning a trip overseas? Our travel money cards take the hassle out of travelling! Browse them below or visit or Card wizard to find the one right for you.</p>
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
