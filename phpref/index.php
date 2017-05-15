<?php
 function act($prev, $current) {
                $prev += $current;
                return $prev; 
   		}
   function sum(...$numbers){
   		return array_reduce($numbers, 'act');
   }
   echo sum([1, 2, 3]);
?>
