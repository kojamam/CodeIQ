<?php

$string = "";
while($input = trim(fgets(STDIN))) {
	$string .= $input;
}

$binString = str_replace([".", "#"], ["0", "1"], $string);

$dec =  bindec($binString);

do {
    $qArray[] = $dec % 36;
} while (($dec = floor($dec/36) ) > 0);

$array36 = [];
foreach ($qArray as $key => $value) {
    $array36[] = $value >= 10 ?  chr($value + 87) : $value;

}

$out = implode("", array_reverse($array36));

echo $out;
