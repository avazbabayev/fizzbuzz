<?php
use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase{

    public function testReturnFizz(){
        $fizz = new FizzBuzz(1,100);
        $this->assertEquals($fizz->detecttype(3),'Fizz');
    }

    public function testReturnBuzz(){
        $fizz = new FizzBuzz(1,100);
        $this->assertEquals($fizz->detecttype(5),'Buzz');
    }

    public function testReturnFizzBuzz(){
        $fizz = new FizzBuzz(1,100);
        $this->assertEquals($fizz->detecttype(15),'FizzBuzz');
    }



}
