<?php

class Footer
{
  function __construct()
  {
    $this->createFooter();
  }

  private function createFooter()
  {
    echo "<Footer><a class='github' href='https://github.com/Maks-T' target='_blank' rel='noopener noreferrer'>Maxim Tsatsura</a></Footer>";
  }
}
