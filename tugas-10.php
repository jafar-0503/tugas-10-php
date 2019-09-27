<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);
echo "<br>";
print("<br> Setelah Disorting (Buble Sort) :<br>");

$arr = bubble_sort($arr);


function bubble_sort($arr) {
        sort($arr);
        print_r($arr);
}