<?php

require_once("../db/configDB.php");
require_once("../db/valueDB.php");
require_once("../db/orderDB.php");

$idPizza = $_POST['pizza'];
$idSauce = $_POST['sauce'];
$idSize = $_POST['size'];

$valueDB = new ValueDB($mysqli);
$orderDB = new OrderDB($mysqli);

$pizzaResult = $valueDB->getPizzaById($idPizza);

foreach ($pizzaResult as $key) {
  $pizza = $key['name'];
}

$sauceResult = $valueDB->getSauceById($idSauce);

foreach ($sauceResult as $key) {
  $sauce = $key['name'];
}

$pricePizzaResult = $valueDB->getPricePizzaById($idPizza);

foreach ($pricePizzaResult as $key) {
  $price = $key['price'];
}

$sizeResult = $valueDB->getSizeById($idSize);

foreach ($sizeResult as $key) {
  $size = $key['name'];
  $ratio = $key['ratio'];
}

$summary = round($price * $ratio, 2);

echo createInvoice($pizza, $sauce, $size, $summary);

$orderDB->saveOrder($idPizza, $idSauce, $idSize, $summary);

function createInvoice($pizza, $sauce, $size, $summary)
{
  return
    "
<div id='invoice'>
  <h3>Чек</h3>
  <p>---------------------------------</p>
  <p>Вы сделали заказ:</p>
  <p>---------------------------------</p>
  <p>Пицца: {$pizza}</p>
  <p>Соус: {$sauce}</p>
  <p>Размер: {$size}</p>
  <p>---------------------------------</p>
  <p>Итого стоимость заказа: {$summary} руб.</p>

</div>
";
}
