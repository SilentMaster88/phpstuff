<?php
 
 $files=scandir('.');
 
 $get_time = create_function('$file','return filemtime($file);');
 
 $times= array_map($get_time, $files);
 
 array_multisort($times, SORT_ASC, SORT_NUMERIC, $files, SORT_ASC, SORT_STRING);

?>
