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

    <link rel="stylesheet" href="/assets/css/newride.css" type="text/css">

  </head>
  <body>
    <div class="container">
      <h2>Create a New Ride:</h2>
      <form class="form" action="#" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input id="pac-input" class="validate" type="text" name="destination_name">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <select>
              <option value="" disabled selected>How many places available?</option>
              <option>1</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <select>
              <option value="" disabled selected>Are you eating there or getting takeout?</option>
              <option>Eat at Location</option>
              <option>Takeout</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
            <input type="text" id="departure_time" class="validate">
            <label for="departure_time">What time are you leaving?</label>
          </div>
        </div>
        <div>
            <input type="checkbox"  class="filled-in" id="filled-in-box">
            <label for="filled-in-box">Yeah, sure, i'll take orders for takeout!</label>
        </div>
        <div class="row">
          <div class="input-field col s3"></div>
          <div class="input-field col s6">
              <input type="text" id="fee" class="require-if-active" data-require-pair="#filled-in-box">
              <label for="fee">What is your takeout fee?</label>
            </div>
        </div>
        <div class="row buttons">
          <button class="btn waves-effect waves-light" type="submit" name="action">Create Ride</button>
          <a href="#"><button type="button" class="btn waves-effect waves-light">Cancel</button></a>
        </div>
      </form>
    </div>
  </body>
</html>
