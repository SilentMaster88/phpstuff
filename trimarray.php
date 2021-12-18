<?php

function TrimArray($Input)
{
 if (!is_array($Input))
 {
  return trim($Input);
 }
 return array_map('TrimArray', $Input);
}

?>
