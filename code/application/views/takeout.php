<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Takeout Order</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  </head>
  <body>
    <h2>Takeout Order</h2>
    <form class="form" action="#" method="post">
      <div class="row">
        <div class="input-field col s3"></div>
        <div class="input-field col s6">
          <textarea name="takeout" rows="8" cols="40"></textarea>
          <label for="takeout">Write out your takeout order:</label>
        </div>
        <div class="input-field col s3"></div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <p>Driver's Fee: </p>
        </div>
        <div class="input-field col s6">
          <input type="submit" name="name" value="Place Order">
        </div>
      </div>
    </form>
  </body>
</html>
