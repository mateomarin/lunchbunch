<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notifications Page</title>
  </head>
  <body>
    <?php foreach($notifications as $notification){?>
      <p><?= $notification['notification']?></p>
      <p><?= $notification['created_at']?></p>
    <?php }?>
  </body>
</html>
