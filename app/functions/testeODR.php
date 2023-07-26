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

function completo($callback1)
{

   return $callback1();
}

echo completo('lastname');