<?php 
   $fp = fopen("Prog6.txt", "r"); 
   $count = fread($fp, 10); 
   fclose($fp); 
   $count = $count + 1; 
   echo "Page views:" . $count . "</p>"; 
   $fp = fopen("Prog6.txt", "w"); 
   fwrite($fp, $count); 
   fclose($fp); 
?> 
