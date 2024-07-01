<?php

  function sayHello(Stringable $stringable): void
  {
    echo "Hello {$stringable->_toString()}" . PHP_EOL;
  }
