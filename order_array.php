<?php
//function array_uniqe
$input = array("a","b","c","d","a","b","c","d","a","b","c","d");
echo '<br> array : ';
print_r($input);
$result = array_unique($input);
echo '<br> array_unique : ';
print_r($result);
echo "<br>".sizeof($result)."<br>";
for($i = 0; $i <sizeof($result); ++$i) {
     echo "<br>[".$i."] => [".$result[$i]."]----- <br>";
}
?>