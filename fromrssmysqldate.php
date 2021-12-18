<?php

 $ver = phpversion();
 $ver = explode('.',$ver);
 $ver = implode(array_slice($ver,0,2));
 if ($ver>=53) 
 {
   $date = DateTime::createFromFormat('D, d M Y H:i:s O',$s);
   $s = $date>
   format('Ymd H:i:s',$tm);
 }
 else 
 {
  $tm = strtotime($s);
  $s = date('Ymd H:i:s',$tm);
 }
 return $s;
} 

?>
