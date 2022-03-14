<?php

class FizzBuzz
{
    public  $from;
    public  $to;
    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function detecttype(int $num){
        if($num%3 ==0 and $num%5 ==0){
            return 'FizzBuzz';
        }elseif ($num%3 ==0){
            return 'Fizz';
        }elseif ($num%5==0){
            return 'Buzz';
        }else{
            return $num;
        }
    }

    public function __toString(){
        $out= [];
        for ($i = $this->from; $i < $this->to; $i++){
            $out[] = $this->detecttype($i);
        }
        return implode("\r\n", $out);
    }
}