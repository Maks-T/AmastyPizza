<?php

class Header
{
  function __construct($mainLink, $ordersLink)
  {
    $this->createHeader($mainLink, $ordersLink);
  }

  private function createHeader($mainLink, $ordersLink)
  {
    $dir =  __DIR__;
    echo "<header><a href='{$mainLink}'>Главная</a><a href='$ordersLink'>Заказы</a></header>";
  }
}
