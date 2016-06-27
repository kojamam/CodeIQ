<?php

$in = explode(",", trim(fgets(STDIN)));

$progress = $in[1] / $in[0];
if($progress > 1){
	echo "invalid";
}else{
	for ($i=0; $i < floor($progress*100); $i++) {
		echo $in[2];
	}
}
