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
                            <h1 class="text-white">WRLD SHOP</h1>
                            <p class="text-success">Building a Better Shop for Crypto Enthusiasts</p>
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
                                          Welcome to the very early prototype WRLD Shop. This site is a mockup. <b>Please do not try to place any orders</b>.
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
                        <div class="card-header glassPanel text-white rcTop">Shop Stats</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left text-white">
                                      <table class="table text-white">
                                        <thead>
                                          <tr>
                                            <th scope="col">Items Sold (24hrs)</th>
                                            <th scope="col">Sales Volume (24hrs)</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>50</td>
                                            <td>100M WRLD</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>
            </div>
        </div>

        <br /><br /><br />

        <div class="container">
            <div class="row jumbotron glassPanel rcAll">
                <div class="container">
                    <div class="row">
                        <div class="col text-left">
                            <h1 class="text-white">Items</h1>
                            <table class="table text-white">
                              <thead>
                                <tr>
                                  <th scope="col">Item</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Unit Price</th>
                                  <th scope="col">Availability</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">PHC Coin</th>
                                  <td>1 oz. silver collector's coin.</td>
                                  <td>200K PHC</td>
                                  <td>10</td>
                                  <td>
                                    <form>
                                        <div class="form-group">
                                            <center><button type = "button" class = "btn btn-primary" id = "add-item-id">Add to Cart</button></center>
                                        </div>
                                    </form>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
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
    </body>
</html>
