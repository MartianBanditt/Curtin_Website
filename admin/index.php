<?php
   require_once 'admin-functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administration - Main Menu</title>
    <?php style_sheets(); ?>
    
</head>

<body>

    <!-- header starts here -->
    <header class="container">
        <?php header_content(); ?>
    </header>

    <main>
       
        <div class="full-width-background title">
            <section id="title" class="container">
				<h1>Nationwide Website Administration</h1>
				<h3>Main Menu</h3>
				
				<?php menu(); ?>
				
            </section>
        </div>
    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>
    
</body>

</html>