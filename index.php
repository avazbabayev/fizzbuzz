<?php
spl_autoload_register(function ($class){
   require_once $class.'.php';
});

echo new FizzBuzz(1,100);