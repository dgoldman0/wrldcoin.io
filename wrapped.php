<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | World Builder</title>

        <meta charset="utf8">
        <meta name="description" content="World Builder is an ecosytsem of projects leveraging blockchain technology to improve the human condition.">
        <meta name="keywords" content="blockchain, crypto, future, innovation, think-tank, technology">
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
                            <h1 class="text-white">Wrapped WRLD Conversion</h1>
                            <p class="text-success">Convert between our TRC-10 token and its wrapped version for use in smart contracts.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                  <div class="card glassPanel border-light rcAll">
                      <div class="card-header glassPanel text-white rcTop">Status</div>
                      <div class="card-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col text-left">
                                      <p class="text-white">
                                        Current Supply of Wrapped WRLD: <span id = "wwrld-supply">0</span> WRLD
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer glassPanel rcBottom"></div>
                  </div>
                </div>
            </div>

            <br />

            <div class="row">
                <div class="col-md-6">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Wrap Some WRLD</div>
                        <div class="card-body">
                          <div class="row container text-white">
                              <div class="col-md-6">
                                <input type="number" min="0" class="form-control rcAll" id="amtWrap">
                              </div>

                              <div class='col-md-6'>
                                <button type = "button" class = "btn btn-block btn-sm btn-primary rcAll" id = "wrap">WRAP</button>
                              </div>
                          </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Unwrap Some WRLD</div>
                        <div class="card-body">
                            <div class="row container text-white">
                              <div class="col-md-6">
                                <input type="number" min="0" class="form-control rcAll" id="amtUnwrap">
                              </div>

                              <div class='col-md-6'>
                                <button type = "button" class = "btn btn-block btn-sm btn-primary rcAll" id = "unwrap">UNWRAP</button>
                              </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
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
        <script src="assets/lib/wrapped.js"></script>
        <script src="assets/lib/abi_wrapped.js"></script>
    </body>
</html>
