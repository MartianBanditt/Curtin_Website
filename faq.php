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


        <div class="full-width-background mt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-sm-3 p-sm-0 p-3">
                        <div class="title-border-red">
                            <h2>I want to know more about Nationwide</h2>
                            <p class="mb-0">We always try to be clear and easy to understand. Sometimes you might have questions that arent answered elsewhere. If you cant find the answer below be sure to <a href="contact.php">contact us</a>.</p>
                            <ul class="my-4">
                                <li><a href="#general">General questions about banking</a></li>
                                <li><a href="#about-us">Find out more about Us</a></li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="full-width-background my-5 py-5 bg-third" id="general">
            <div class="container accordion" id="accordionExample">
                <h2 class="mb-4">General questions about banking</h2>
                <!-- faq questions and answers -->
                <div class="row bg-dark text-light p-2 m-auto question-box collapsed" class="text-white" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h3 class="accordian-title">What is the different between a credit and debit card?</h3>
                </div>

                <div class="row justify-content-center p-3 products-cards collapse answer-box" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample">

                    <div class="col-sm-12 col-md-6 bg-white p-sm-5 p-4">
                        <h2>Debit cards</h2>
                        <p>Allow you to use credit that must be paid back to make purchases</p>
                        <ul>
                            <li>Account does not need to be positive to make purchases</li>
                            <li>Can spend more than what you have</li>
                            <li>Any debt must be paid back in a specified time</li>
                            <li>Will incur interest on credit</li>
                            <li>Can help build credit rating</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 bg-white p-sm-5 p-4">
                        <h3>Debit cards </h3>
                        <p>Allow you to only spend the amount you have in your account</p>
                        <ul>
                            <li>Dont have to worry about going in to debt</li>
                            <li>Can only ever spend the amount in your account</li>
                            <li>Doesn't add to a good credit rating</li>
                        </ul>
                    </div>

                </div>



                <!-- faq questions and answers -->
                <div class="row bg-dark text-light p-2 m-auto question-box collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h3 class="accordian-title">How does investing work?</h3>
                </div>
                <div class="row justify-content-center p-3 collapse answer-box" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionExample">

                    <div class="col-sm-12 col-md-12 bg-white p-sm-5 p-4">

                        <h3>You can allot parts of your account towards investment</h3>
                        <p>This money is then directed towards an investment area specificied by you or you can let us do it for you.</p>
                        <p>Every quarter if you see a return on your investment your account balance will reflect that.</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background my-5 py-5 bg-secondary-blue" id="about-us">
            <div class="container accordion" id="accordionExample">
                <h2 class="mb-4 text-white">Learn more about Nationwide</h2>
                <!-- Question for user -->
                <div class="row bg-red text-light p-2 m-auto question-box collapsed"id="headingOne" data-toggle="collapse" class="text-white collapsed" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h3 class="accordian-title">Can anyone be a member of Nationwide?</h3>
                </div>

                <div class="row justify-content-center p-3 collapse answer-box" id="collapseOne" aria-labelledby="headingOne" aria-expanded="false" data-parent="#accordionExample">
                    <div class="col-sm-12 col-md-12 bg-white p-sm-5 p-4">
                        <h3>Anyone can be a member of Nationwide</h3>
                        <p>You're a member if you have a current account, mortage, or have invested through us in one of our many investment packages.</p>
                        <p>You aren't a member if you only have insurance with us.</p>
                    </div>
                </div>

                <!-- Question for user -->
                <div class="row bg-red text-light p-2 m-auto question-box collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h3 class="accordian-title">What benifits do members enjoy?</h3>
                </div>

                <div class="row justify-content-center p-3 collapse answer-box" id="collapseTwo" aria-labelledby="headingTwo" aria-expanded="false" data-parent="#accordionExample">
                    <div class="col-sm-12 col-md-12 bg-white p-sm-5 p-4">
                        <h3>As a member of you gain the following benifits</h3>
                        <ul>
                            <li>A vote on Nationwide policy</li>
                            <li>A voice in shaping the future of Nationwide</li>
                            <li>Special member only offers and discounts</li>
                            <li>Access to special rates for products that are also available to the general public</li>
                        </ul>
                    </div>
                </div>

                <!-- Question for user -->
                <div class="row bg-red text-light p-2 m-auto question-box collapsed" id="headingThree" data-toggle="collapse" class="text-white collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3 class="accordian-title">Does Nationwide use my money ethically</h3>
                </div>

                <div class="row justify-content-center p-3 collapse answer-box" id="collapseThree" aria-labelledby="headingThree" aria-expanded="false" data-parent="#accordionExample">
                    <div class="col-sm-12 col-md-12 bg-white p-sm-5 p-4">
                        <h3>We've listened to our members and made sure Nationwide is an ethical company</h3>
                        <p>We have:</p>
                        <ul>
                            <li>Stopped investment in new carbon negative ventures</li>
                            <li>Audited our investements to make sure they comply with human rights laws</li>
                        </ul>
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
