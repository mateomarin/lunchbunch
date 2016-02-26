<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ride Details</title>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <!-- Navigation JS -->
        <script src="/assets/js/nav.js"></script>
        <!-- My CSS -->
        <link rel="stylesheet" href="/assets/css/home.css">
    </head>
    <body>
    <?php require('partials/navbar.php'); ?>
        <div class="container">
            <div class="row">
                <div id="col s12">
                    <div class="card large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="/assets/img/pizza.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?= $rides['destination_name'] ?><i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $rides['destination_name'] ?><i class="material-icons right">close</i></span>
                            <ul>
                                <li>Where to: <?= $rides['destination_name'] ?></li>
                                <li>Number of Available Seats: <?= $rides['seats_avail'] ?></li>
                                <li>Dining Status: <?php if ($rides['duration'] == 1) {
                                    echo "Dine There";
                                } else {
                                    echo "Takeout";
                                  } ?>
                                </li>
                                <li>Leaving Time: <?= $rides['departure_time'] ?></li>
                                <li>Accepts Orders: <?php if ($rides['accepts_order'] == 1) {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                  }  ?>
                                </li>
                            </ul>
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Place Order</a>
                        </div>
                    </div>
                </div>
                  <div id="modal3" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <form action="/Takeouts/add_takeout" class="col s12">
                                <input type="hidden" name="ride_id" value="<?= $rides['id']?>">
                                <input type="hidden" name="takeout_fee" value="<?= $rides['takeout_fee']?>">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Write out your takeout order:</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <p>Driver's Fee: <?= $rides['takeout_fee']?></p>
                                    </div>
                                    <div class="input-field col s6">
                                        <input class="btn" type="submit" name="name" value="Place Order">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </body>
</html>
