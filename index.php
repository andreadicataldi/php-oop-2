<?php
include __DIR__ . './classes/User.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <?php
    foreach ($users as $user) { ?>
      <div class="card">
        <h2>Username: <?php echo $user->username; ?></h2>
        <p>Password: <?php echo $user->password; ?></p>
        <p>Email: <?php echo $user->email; ?></p>
      </div>
    <?php } ?>
  </div>
</body>

</html>