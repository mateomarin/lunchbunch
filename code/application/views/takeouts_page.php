<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Takeouts Page</title>
  </head>
  <body>
    <a href="/Takeouts/add_takeout_form/<?= $takeouts[0]['ride_id']?>"><button type="button" name="button">Add Takeout</button></a>
    <?php foreach($takeouts as $takeout){?>
      <p><?= $takeout['description']?></p>
      <?php if($takeout['driver_accepts']==0 && )?>
    <?php }?>
  </body>
</html>
