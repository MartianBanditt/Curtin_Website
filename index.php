<?php
	
	// Change to the https secure site
	if($_SERVER["HTTPS"] != "on"){
		
		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		exit();
	}
   require_once 'scripts/functions.php';
      
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Homepage</title>
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
        <div class="jumbotron mb-5" id="home-bg-img">
            <div class="container p-0 p-sm-3">
                <section id="cta" class="col-sm-12 col-md-5 offset-md-0 bg-panel-b p-sm-5 p-4">

                    <h2>We are more than a Bank</h2>
                    <p class="my-4">We're insurance, technology, investment and banking.</p>
                    <a href="find-a-service.php" class="btn btn-primary btn-lg">Help us find you the right service</a>

                </section>
            </div>
        </div>

        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background">
            <div class="container">
                <div class="row" id="front-help">

                    <div class="col-12 col-md-6 mb-md-0 mb-3">

                        <div class="card mb-sm-4 mb-3">
                            <div class="card-header bg-panel-b text-white">
                                <h3 class="card-title mt-2 ml-3"><span><i class="far fa-credit-card mr-2"></i></span> Our products</h3>
                            </div>
                            <div class="card-body">
                                <ul class="px-3">
                                    <li class="py-3"><a href="card-types.php#credit-cards" title="Credit Cards">Credit cards</a></li>
                                    <li class="py-3"><a href="card-types.php#debit-card" title="Debit Card">Debit Cards</a></li>
                                    <li class="pt-3"><a href="card-types.php#travel-money-card" title="Travel money Card">Travel money cards</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-12 p-3 p-sm-5 no-gutters bg-third mb-sm-0 mb-0 border-bottom-4">
                            <div class="row">
                                <div class="col-4">
                                    <span class="fa-large-front"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="fa-large-front mt-sm-3"><i class="fab fa-bitcoin"></i></span>

                                </div>
                                <div class="col">
                                    <h3>Financial Tech</h3>
                                    <p>Mobile pay, cryptocurrency, smart-tech, learn more about how we harness fintech to enhance your banking experience</p>
                                    <a href="fin-tech.php" class="btn btn-primary btn-lg">Find out more</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6 mb-sm-0 mb-3">
                        <img src="media/cafe.png" class="img-panel-front" alt="Women at cafe with coffee">
                        <div class="bg-third p-sm-5 p-4 border-bottom-4">
                            <div class="">
                                <h2>Need help understanding your options?</h2>
                                <p>We have you covered with a load of information around the basics from</p>
                                <ul>
                                    <li>Investing</li>
                                    <li>Index funds</li>
                                    <li>Credit types</li>
                                </ul>
                                <a href="faq.php" class="btn btn-primary btn-lg">Find out more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="full-width-background bg-third mt-sm-5 mb-3 py-3 py-sm-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 p-sm-5 p-4 bg-white border-bottom-4">
                        <h2>We help people every day</h2>
                        <p>Find out how we help them achieve their goals, manage their finances, and make decisions that work for them.</p>
                        <a href="about-us.php" class="btn btn-primary btn-lg">Find out more</a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="media/handsome-man-coffee-flipped.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="full-width-background bg-white mt-l-5 mb-3 py-sm-5 big-quote">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-7 p-sm-5 p-4 bg-secondary-blue text-qoute">
                        <h2><span>"</span>As a Nationwide member I know that I'm working with people that have my best interest at heart.<span>"</span></h2>
                        <footer class="blockquote-footer">Web developer <cite title="Source Title">James Collins</cite></footer>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <img src="media/bottom.png" class="img-fluid image-quote" alt="...">
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
