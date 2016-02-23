<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a Ride</title>
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
      </form>
    </div>
  </body>
</html>
