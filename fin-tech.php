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


        <div class="full-width-background mt-sm-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 my-sm-3 p-5">
                        <div class="title-border-red">
                            <h2>Cardless banking</h2>
                            <p class="mb-0">Bank on your phone with the Nationwide smarthphone app and leave your card at home. Supported at all Nationwide atms.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="full-width-background bg-third py-5 mb-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 p-sm-5 p-3">
                        <h2>> Leave your wallet behind</h2>
                    </div>
                    <div class="col-sm-12 col-md-7 bg-white p-sm-5 border-bottom-4 p-4">
                        <h3>Go Cardless </h3>
                        <p>With the Nationwide app You'll be able to:</p>
                        <ul>
                            <li>Withdraw cash at any Nationwide atm with your phone</li>
                            <li>Use it to pay at participating retailers and recieve rewards and discounts</li>
                            <li>Increase your accounts security by adding a fingerprint lock</li>
                            <li>Not have to worry about losing your card or wallet</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="full-width-background mt-sm-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 my-sm-3 p-5">
                        <div class="title-border-red">
                            <h2>Cryptocurrency</h2>
                            <p>Buy/Sell/Trade cryptocurrency with the trust and guaruntee of Nationwide.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="full-width-background  bg-third py-5 mb-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 p-sm-5 p-4">
                        <h2>> Keeping you secure</h2>
                    </div>
                    <div class="col-sm-12 col-md-7 bg-white p-sm-5 border-bottom-4 p-4">
                        <h3>Going digital</h3>
                        <p>At Nationwide we are always looking at new technology to enhance our service offerings, increase our security, and find new and better ways we can serve our members.</p>
                        <p>We currently leverage cryptocurrency to as a ledger for transactions that occur on our network, making your accounts more secure than ever.</p>
                    </div>
                    <div class="col-md-5 p-sm-5 p-4 mt-sm-4">
                        <h2>> Trade with us</h2>
                    </div>
                    <div class="col-sm-12 col-md-7 bg-white p-sm-5 border-bottom-4 p-4 mt-sm-4">
                        <h3>Trading platform</h3>
                        <p>Using the Nationwide cryptocurrency exchange you can also buy/sell/trade cryptocurrency with the security, experience and trust that comes with Nationwide.</p>

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
