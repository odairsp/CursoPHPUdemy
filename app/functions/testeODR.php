<?php

// for ($i=0;$i <= 100; $i++) { 
//    echo $i % 2 != 0 ? $i :"\n";
// }

//var_dump (!!0 ?'zero':'um');
function name()
{
   return 'NOME';
}
function lastname()
{
   return 'SOBRENOME';
}
function nome($callback)
{
   return call_user_func($callback);
}
function completo($callback1, $callback2)
{
   if (is_callable($callback1) && is_callable($callback2)) {
      return $callback1 . ' ' . $callback2;
   }
}
// echo completo('name', 'lastname');
// echo "\n";
// echo nome('name');
var_dump($_SERVER);

