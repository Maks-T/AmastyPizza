<?php


class ValueDB
{
  private $connectDB;

  function __construct($connectDB)
  {

    $this->connectDB = $connectDB;
  }

  public function getPizzaById($id)
  {
    $request = "SELECT * FROM `pizza` WHERE id={$id}";
    return  $this->getResultByRequest($request);
  }

  public function getSauceById($id)
  {
    $request = "SELECT * FROM `sauces` WHERE id={$id}";
    return  $this->getResultByRequest($request);
  }

  public function getPricePizzaById($id)
  {
    $request = "SELECT * FROM `price_pizza` WHERE id_pizza={$id}";
    return  $this->getResultByRequest($request);
  }

  public function getSizeById($id)
  {
    $request = "SELECT * FROM `sizes` WHERE id={$id}";
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
