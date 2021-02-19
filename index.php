<?php
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Post.php';

$users = [
  new User("Andrea", "password", "andrea@gmail.com"),
  new User("Giuseppe", "password", "giuseppe@brava.com"),
  new User("Arrigo", "password", "arrigo@gmail.com"),
  new User("Tonino", "password", "tonino@gmail.com"),
  new User("Luigi", "password", "luigi@gmail.com"),
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>php-oop-2</title>
</head>

<body>
  <div class=" container d-flex">
    <?php foreach ($users as $value) { ?>
      <ul>
        <li><?php echo $value->username ?></li>
        <li><?php echo $value->password ?></li>
        <li><?php echo $value->email ?></li>
      </ul>
  </div>
<?php } ?>
</div>



</body>

</html>