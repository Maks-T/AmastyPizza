<?php

class Main
{

  function __construct()
  {
    echo "<main>";
    $this->createOrderForm();
    echo "</main>";
  }

  private function createSelect($label, $name, $result)
  {
    echo "<p>Выберите {$label}:</p>";
    echo "<select name='{$name}' id='{$name}'>";
    foreach ($result as $key) {
      echo "<option value='{$key['id']}'>{$key['name']}</option>";
    }
    echo '</select><br>';
  }

  private function createOrderForm()
  {
    require_once("./db/configDB.php");
    require_once("./db/infoDB.php");
    $infoDB = new InfoDB($mysqli);

    echo "<form name='order' id='order' method='POST'>";
    echo "<h2>Форма для заказа пиццы:</h2>";

    $this->createSelect('пиццу', 'pizza', $infoDB->getNamesPizza());
    $this->createSelect('соус', 'sauce', $infoDB->getNamesSauces());
    $this->createSelect('размер пиццы', 'size', $infoDB->getSizes());
    echo "<div id='invoice__wrapper'></div>";
    echo '<input type="submit" name="orderBtn" id="orderBtn" value="Заказать"/>';
    echo "</form>";
  }
}
