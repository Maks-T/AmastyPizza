<?php

enum Query: string
{
  case PIZZA = 'SELECT * FROM pizza';
  case SAUCES  = 'SELECT * FROM sauces';
  case SIZES = 'SELECT * FROM sizes';
  case PRICES = 'SELECT * FROM prices';
}

class InfoDB
{
  private $connectDB;

  function __construct($connectDB)
  {
    $this->connectDB = $connectDB;
  }

  public function getNamesPizza()
  {
    $request = Query::PIZZA->value;
    return  $this->getResultByRequest($request);
  }

  public function getNamesSauces()
  {
    $request = Query::SAUCES->value;
    return  $this->getResultByRequest($request);
  }

  public function getSizes()
  {
    $request = Query::SIZES->value;
    return  $this->getResultByRequest($request);
  }

  public function getPrices()
  {
    $request = Query::SIZES->value;
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
