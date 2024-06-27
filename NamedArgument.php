<?php

  function sayHello(string $first, string $middle, string $last): void
  {
    echo "Hello $first $middle $last" . PHP_EOL;
  }

  // without named argument
  sayHello("Eko", "Kurniawan", "Khannedy");

  // with named argument
  sayHello(first: "Eko", middle: "Kurniawan", last: "Khannedy");
