<?php
$name = "refer";
if(strrev ($name) == $name){
echo "This name is palindrome";
}

else if (strrev($name) !== $name){
echo "This is not a palindrome";
}
?>