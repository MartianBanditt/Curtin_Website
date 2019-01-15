<?php

// main navigation
function header_content(){
    echo <<<HEADERCONTENT

        '<div class="row">
            <div class="col">
                <img src="media/nationwideslogan.png" alt="nationwide logo">
            </div>
            <div class="col align-self-center">
                <div>Social media <a href="facebook.com">facebook</a> - <a href="twitter.com">Twitter</a></div>
            </div>
        </div>'

HEADERCONTENT;
}

// main navigation
function main_nav(){
    echo <<<NAV
     '<nav class="navbar navbar-expand-lg navbar-light bg-light container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="account-types.php">Account types</a>
                            <a class="dropdown-item" href="card-types.php">Card Types</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About-us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="find-a-service.php">Find a service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>

                </ul>

            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>'

NAV;
}

// main navigation
function footer(){
    echo <<<FOOTER
        '<div class="container">
            <footer>
                <div>This is the footer</div>
            </footer>
        </div>'

FOOTER;
}
?>
