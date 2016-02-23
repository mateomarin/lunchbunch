<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a Ride</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h2>Create a New Ride:</h2>
      <form class="form" action="#" method="post">
        <div class="form-group">
          <label for="destination_name">Where are you going?</label>
          <input type="text" name="destination_name" value="">
        </div>
        <div class="form-group">
          <label for="seats_avail">How many places available?</label>
          <select class="dropdown" name="seats_avail">
            <option>
            <!--For loop to print #s with max of user's car's seats-->
            </option>
          </select>
        </div>
        <div class="form-group">
          <label for="duration">Are you eating there or getting takeout?</label>
          <select class="dropdown" name="seats_avail">
            <option value="1">Eat at Location</option>
            <option>Takeout</option>
          </select>
        </div>
        <div class="form-group">
          <label for="departure_time">What time are you leaving?</label>
          <input type="text" name="departure_time" value="">
        </div>
        <div class="form-group">
          <input type="checkbox" name="accepts_order" value="Yeah, sure, i'll take orders for takeout!">
        </div>
        <div class="form-group">
          <label for="duration">What is your takeout fee?</label>
          <input type="text" name="fee" value="">
        </div>
        <input type="submit" value="Create Ride">
      </form>
      <a href="#"><button type="button" name="Cancel">Cancel</button></a>
    </div>
  </body>
</html>
