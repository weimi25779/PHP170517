<?php
function fx($x){
$result=2*$x+1;
return $result;
}

function sayYa($who){
echo "Ya,{$who}<br>";
}

function sayHi($who,$pre='Hello'){
echo "{$pre},{$who}<br>";
}

function SayHello(){
$names=func_get_args();
foreach ($names as $name){
echo "Hello,{$name}<br>";
}

}