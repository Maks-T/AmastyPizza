<?php

class OrderDB
{
  private $connectDB;

  function __construct($connectDB)
  {

    $this->connectDB = $connectDB;
  }

  public function saveOrder($idPizza, $idSauce, $idSize, $summary)
  {
    $request = "INSERT INTO orders (id, id_pizza, id_sauces, id_sizes, summary) VALUES (NULL, $idPizza, $idSauce, $idSize, $summary);";
    $result = $this->connectDB->prepare($request);
    $result->execute();
  }

  public function getOrders()
  {
    $request = "SELECT pizza.name as pizza, sauces.name as sauce, sizes.name as size, summary FROM orders INNER JOIN pizza ON orders.id_pizza=pizza.id JOIN sauces ON orders.id_sauces=sauces.id JOIN sizes ON orders.id_sizes=sizes.id;";
    return  $this->getResultByRequest($request);
  }


  private function getResultByRequest($request)
  {
    $result = $this->connectDB->prepare($request);
    $result->execute();
    $result = $result->get_result();
    return  $result;
  }
}
