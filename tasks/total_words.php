<?php  
$count = 0;  
   
//Opens a file in read mode  
$file = fopen("data.txt", "r");  
      
//Gets each line till end of file is reached  
while (($line = fgets($file)) !== false) {  
    //Splits each line into words  
    $words = explode(" ", $line);  
    //Counts each word  
    $count = $count + count($words);  
}  
   
print("Number of words present in given file: " . $count);  
fclose($file);  
?>  