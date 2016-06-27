<?php

$collected = ["skin" => 0, "fang" => 0, "eye" => 0];
$needed = ["skin" => 5, "fang" => 6, "eye" => 2];
$blade = ["skin" => 0, "fang" => 0, "eye" => 0];

$num = (int) trim(fgets(STDIN));

for ($i=0; $i < $num; $i++) {
	$buf = fgetc(STDIN);

	if ($buf === "q") {
		$collected["skin"] += 2;
		$collected["fang"] += 10;
		$collected["eye"] += 2;
	} else if ($buf === "Q") {
		$collected["skin"] += 8;
		$collected["fang"] += 2;
		$collected["eye"] += 2;
	}
}


foreach ($collected as $material => $num) {
	$blade[$material] = floor($num / $needed[$material]);
}

print(min($blade)."\n");
