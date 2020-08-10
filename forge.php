<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forge | World Builder</title>

        <!-- CHARSET AND VIEWPORT METAS AT THE TOP, BELOW TITLE ALWAYS. -->
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- NOW SOME DESCRIPTION METAS -->
        <meta name="description" content="World Builder Token Forge">
        <meta name="keywords" content="cryptocurrency, crypto, blockchain, money, finance">

        <!-- CSS, ICONS AND BOOTSTRAP -->
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
                            <h1 class="text-white">TokenForge</h1>
                            <p class="text-success">Forge new assets you need using WRLD token</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <select id = "token" name = "token"></select><br />
                    <small class="text-white">Select Token</small>
                </div>

                <div class='col-md-4'>
                  <medium class="text-white"><span id="addr">TVxEqHRA9woSA2RvkJJEfmYJJG6NXvbFiV</span></medium><br/>
                  <small class="text-white">Contract Address</small>
                </div>

                <div class="col-md-2">
                    <h4 class="text-white"><span id="smith-count">0</span></h4>
                    <small class="text-white">Verified Smiths</small>
                </div>

                <div class="col-md-2">
                    <h4 class="text-white"><span id="total-supply">0</span>M SUN</h4>
                    <small class="text-white">Total Supply</small>
                </div>

                <div class="col-md-2">
                    <h4 class="text-white"><span id="total-wrld">0</span>M SUN</h4>
                    <small class="text-white">WRLD Used</small>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-6">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Introduction</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="text-white">
                                            <p>PHC is updated and should be working properly. However, please make sure that you are familiar with the forging process and its risks. ACW is now available, but is in earlier testing stages.
                                            <hr />
                                            This platform lets you take World Builder's WORLD coin, and "burn" it in return for the creation of new tokens from our ecosystem. Those burned tokens will be temporarily locked out of circulation, before eventually being returned to the project team of the associated token.<br />
                                            <br />
                                            <b>Forging:</b> To make forging a bit more like actually mining for things like gold and silver, the forge rate isn't constant. Instead, the cost to forge increases based on how recently the last forge occurred. You may try forging tokens once per hour, up to the current per user forge limit.<br />
                                            <br />
                                            <b>Registration:</b> To prevent people from abusing the system and forging with multiple accounts, you'll have to pay an initial registration fee. This fee will make you a smith a coin. It's a one time fee (per token project), paid in TRX, to the project stewards. Each project sets its own smithing fee.
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
                        <div class="card-header glassPanel text-white rcTop">Forge Controls</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left">
                                        <div class = "col text-center" id = "disconnected_message">
                                            <h1><center>Disconnected From Tron Network</center></h1>
                                            You are either not logged in using a Tron compatible browser, or are not using one.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col text-center" id="register_form">
                                        <h1 class="text-white">Register to Forge <span id = "cur">PHC</span></h1>
                                        You're not currently registered as a smith for this token. You'll have to pay an initial fee of <span id = "registration_fee">0</span> TRX to forge.
                                        <form>
                                            <div class="form-group">
                                                <center><button type = "button" class = "btn btn-primary" id = "register">Register</button></center>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col text-center" id="forge_form">
                                        <h1 class="text-white">TokenForge (<a id = "project_link" href = "https://promote.health/public-health-coin/"><span id = "cur2">PHC</span></a>)</h1>
                                        Wallet Balance: <span id = "balance">0</span> <span id = "cur3">PHC</span><br/>
                                        Forge Price: <span id = "price">0</span> WRLD<br/>
                                        Maximum WORLD Allowed: <span id = "max">0</span><br/>
                                        Estimated number of tokens to forge: <span id = "est">0</span>
                                        <hr/>
                                        <input type="number" min="0" class="form-control rcAll" id="amtWRLD">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom">
                            <div class="row">
                                <div class="col text-center">
                                    <button type = "button" class = "btn btn-block btn-sm btn-primary rcAll" id = "forge">Forge Tokens</button>
                                </div>
                            </div>
                        </div>
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
