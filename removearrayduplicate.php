<?php

function removeDuplicatedValues($array)
{
 $_a = array();
 while(list($key,$val) = each($array))
 {
  $_a[$val] = 1;
 }
 return array_keys($_a);
}

?>
