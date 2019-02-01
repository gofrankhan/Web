<?php
$myFile = "data.txt";
$lines = file($myFile);//file in to an array
//var_dump($lines);

//unset($lines[0]);
//unset($lines[1]); // we do not need these lines.

foreach($lines as $line) 
{
	echo $line."<br>";
    $var = explode(' ', $line);
	foreach($var as $v)
	{
		echo $v."<br>";
	}
}

//print_r($arr);
?>