<?php

class MyClass
{
 protected $var1 ='', $var2 =0;
 public function __construct(){
     //
 }
 public function getVar1(){
     return $this->var1;
 }
}

$myObject = new Myclass();
$myObject->getVar1();