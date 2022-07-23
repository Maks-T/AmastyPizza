<!doctype html>
<html lang="ru">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <title>Заказ пиццы</title>
</head>

<body>
  <?php

  require_once("../components/header.php");
  require_once("../components/footer.php");
  require_once("./tableOrders.php");


  new Header('../', './');
  new TableOrders();
  new Footer();

  ?>

</body>

</html>