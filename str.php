<?php

$str = "Sziasztok ez egy php str";
echo strtolower($str). "<br>";
echo strtoupper($str). "<br>";
echo str_replace("php", "Valami más", $str). "<br>";
echo  str_word_count($str)."<br>";

?>