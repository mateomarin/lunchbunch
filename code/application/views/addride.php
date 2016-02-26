<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a Ride</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQroyo-GY-YEfdmHQANwVznL8Q2WTBT9s&libraries=places"></script>
    <script src="/assets/js/newride.js"></script>
    <script src="/assets/js/timepicker/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="/assets/js/timepicker/jquery.timepicker.css">
    <link rel="stylesheet" href="/assets/css/newride.css" type="text/css">

  </head>
  <body>
    <div class="container">
      <h2>Create a New Ride:</h2>
      <form class="form" action="/add_new_ride/<?= $this->session->userdata('id') ?>" method="post">
      <input type="hidden" id="lat" name="destination_lat" value="">
      <input type="hidden" id="lng" name="destination_lng" value="">
      <input type="hidden" id="lat_origin" name="origin_lat" value="37.377216">
      <input type="hidden" id="lng_origin" name="origin_lng" value="-121.9141138">
        <div class="row">
          <div class="input-field col s12">
            <input id="pac-input" class="validate" type="text" name="destination_name">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <select name="seats_avail">
              <option value="" disabled selected>How many places available?</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <select class="duration" name="duration">
              <option value="" disabled selected>Are you eating there or getting takeout?</option>
              <option value="0">Eat at Location</option>
              <option value="1">Takeout</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <input type="text" id="departure_time" name="departure_time" class="validate">
            <label for="departure_time">What time are you leaving?</label>
          </div>
        </div>
        <div>
            <input type="checkbox" name="accepts_order" class="filled-in" id="filled-in-box">
            <label for="filled-in-box">Yeah, sure, i'll take orders for takeout!</label>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
              <input type="text" id="fee" name="takeout_fee" class="require-if-active" data-require-pair="#filled-in-box">
              <label for="fee">What is your takeout fee?</label>
            </div>
        </div>
        <div class="row buttons">
          <button class="btn waves-effect waves-light" id="submit-btn" name="action">Create Ride</button>
          <a href="/success"><button type="button" class="btn waves-effect waves-light">Cancel</button></a>
        </div>
      </form>
    </div>
  </body>
</html>
