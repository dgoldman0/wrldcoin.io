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
        <link rel="stylesheet" href="assets/css/wrld.css" />

        <link rel="icon" type="image/png" href="assets/img/etc.png">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f352960784.js" crossorigin="anonymous"></script>
    </head>

    <body class="wallpaper">
      <?php include('modules/navbar.php'); ?>
        
        <br /><br /><br />
        <br /><br />

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
            <div class="card border-white rcAll" style="background: rgba(0, 0, 0, 0);">
                <div class="card-header text-white rcTop" style="background: rgba(0, 0, 0, 0.65);">Lockup Information</div>
                <div class="card-body text-white" style="background: rgba(0, 0, 0, 0.65);">
                    <div class="row">
                        <div class="col text-center">
                            <p>Enter a number of WRLD tokens to lock up, and press the 'Lock' button. Confirm the transaction, and your relevant permissions will unlock!</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-white rcBottom" style="background: rgba(0, 0, 0, 0.65);">
                    <div class="row">
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <br />
            <a class="btn btn-block btn-md btn-primary rcAll text-white" href="#">What are Power Levels?</a><br /><br />
            <a class="btn btn-block btn-md btn-warning rcAll text-white" href="#">Buy WRLD Token</a><br /><br />
        </div>

        <div class="col-md-6">
            <div class="card border-danger rcAll" style="background: rgba(0, 0, 0, 0);">
                <div class="card-header text-white rcTop" style="background: rgba(0, 0, 0, 0.65);">MY WRLD VAULT</div>
                <div class="card-body text-white" style="background: rgba(0, 0, 0, 0.65);">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <span class="badge badge-danger text-white rcAll">
                                    <span class="tokenAmount mono">0</span> WRLD
                                </span><br />
                                <small><b>BALANCE</b></small>
                            </div>

                            <div class="col text-center">
                                <span class="badge badge-danger text-white rcAll">
                                    <span class="frozenAmount mono">0</span> WRLD
                                </span><br />
                                <small><b>CURRENT LOCKUP</b></small>
                            </div>
                        </div>
                        <br />

                        <div class="row">
                            <div class="col text-center">
                                <span class="badge badge-danger text-white rcAll">
                                    <span class="frozenTotalAmount mono">0</span> WRLD
                                </span><br />
                                <small><b>TOTAL LOCKUP</b></small>
                            </div>

                            <div class="col text-center">
                                <span class="badge badge-danger text-white rcAll">
                                    <span class="divsAmount mono">0</span>
                                </span><br />
                                <small><b>YOUR LEVEL</b></small>
                            </div>
                        </div>

                        <hr />

                        <div class="row">
                            <input class="form-control form-control-sm rcAll" id="freezeAmount" placeholder="Amount to Lock Up">
                        </div>
                    </div>
                </div>

                <div class="card-footer text-white rcBottom" style="background: rgba(0, 0, 0, 0.65);">
                    <div class="row">
                        <div class="col">
                            <span class="btn btn-block btn-success btn-sm rcAll" style="cursor:pointer" id="freeze">LOCK WRLD</span>
                        </div>
                        <div class="col">
                            <span class="btn btn-block btn-danger btn-sm rcAll" style="cursor:pointer" id="unfreeze">UNLOCK WRLD</span>
                        </div>
                    </div>
                </div>
            </div>
            <br />
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
