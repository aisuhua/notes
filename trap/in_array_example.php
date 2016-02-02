<?php
 $a = ['a', 32, true, 'x' => 'y'];
 var_dump(in_array(25, $a)); // true, one would expect false
 var_dump(in_array('ggg', $a)); // true, one would expect false

 var_dump(in_array(0, $a)); // true
 var_dump(in_array(null, $a)); // false



