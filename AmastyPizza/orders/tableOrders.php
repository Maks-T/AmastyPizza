<?php

class TableOrders
{

  function __construct()
  {
    echo "<main>";
    $this->createTableOrders();
    echo "</main>";
  }

  private function createTableOrders()
  {
    require_once("../db/configDB.php");
    require_once("../db/orderDB.php");
    $orderDB = new OrderDB($mysqli);

    $ordersResult = $orderDB->getOrders();

    echo "<table>";
    echo " <tr><th>Пицца</th><th>Соус</th><th>Размер</th><th>Стоимость</th></tr>";
    foreach ($ordersResult as $key) {
      echo "
     
      <tr><td>{$key['pizza']}</td><td>{$key['sauce']}</td><td>{$key['size']}</td><td>{$key['summary']}</td></tr>";
    }
    echo "</table>";
  }
}
