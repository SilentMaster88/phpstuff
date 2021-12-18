<?php

function createZip($files, $zip_file) 
{
 $zip = new ZipArchive;
 // if the zip file can be created, traverse the array $files and add each file in archive
if($zip->open($zip_file, ZipArchive::CREATE) === TRUE) 
{
 foreach($files as $file)
 {
  $zip->addFile($file);
 }
 $zip->close();
 return true;
}
else return false;
}


?>
