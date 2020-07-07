<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | WrldBuilder</title>

        <meta charset="utf8">
        <meta name="description" content="Write your description here">
        <meta name="keywords" content="Add, Some, Good, Keywords, Here, Separated, By, Commas, and, Spaces, so, people, on, the, internet, can, find, your, site, more, easily">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/world.css" />

        <link rel="icon" type="image/png" href="assets/img/etc.png">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f352960784.js" crossorigin="anonymous"></script>
    </head>

    <body class="wallpaper">
        <?php include('modules/navbar.php'); ?>

        <!-- SPACING OF 5 BR'S NECESSARY FOR TOP OF CONTENT TO SHOW WITH STICKY NAVBAR. -->
        <br /><br /><br /><br /><br />

        <!-- MAIN CONTENT DIV -->
        <div class="container">
            <div class="row jumbotron glassPanel rcAll">
                <div class="container">
                    <div class="row">
                        <div class="col text-left">
                            <h1 class="text-white">WorldCoin</h1>
                            <p class="text-success">Tokenising the world&apos;s most imperative services and resources</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Introduction</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="text-white">
                                            Welcome to wrldcoin.io - the home of the World Builder Project on TRON. World Builder seeks to improve the human condition by leveraging blockchain and cryptoasset technology.
                                            World Builder isn't a single project. We're a think-tank and incubator of ideas and technology which can be enhanced with blockchain. If you're interested in our efforts, please join us in our <a href="https://t.me/tworldbuilder" target="_blank">Telegram Group</a>.<br />
                                            <br />
                                            You can also use our <a href = "https://worldbuilder.fun">faucets and mini-games</a> to collect WRLD, the core token of our ecosystem. Or visit the pages of our child projects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Projects</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left text-white">
                                      We have a number of projects already in progress. These projects will function as the core ecosystem for World Builder.
                                      <ul>
                                        <li>Promote.Health</li>
                                        <li>Academic Reward Token</li>
                                        <li>Project Outpost</li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Dependencies -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/tronweb.js"></script>

        <!-- Dapp Scripts -->
        <script src="assets/lib/abi.js"></script>
        <script src="assets/lib/forging.js"></script>
    </body>
</html>
