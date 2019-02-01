<?php
function ampmtime($strtime){
	$exploded=explode(":",$strtime);
	$hour = $exploded[0];
	$min = $exploded[1];
	$inthour = (int)$hour;
	if($inthour>=12){
		if($inthour == 12)
			$inthour = 12;
		else
			$inthour = ($inthour-12);
		if($inthour<10)
			return "0".$inthour.":".$min." PM";
		else
			return "".$inthour.":".$min." PM";
		
	}else{
		return "".$hour.":".$min." AM";
	}
}

function splitstring($str, $c){
	$val =  str_word_count($str);
	$words =  str_word_count($str,1);
	$count = 0;
	$str1 = "";
	$str2 = "";
	foreach($words as $word){
		
		if($count >= 3){
			if(empty($str2))
				$str2 = $str2.$word; 
			else
				$str2 = $str2." ".$word;
		}
		else
		{
			if(empty($str1))
				$str1 = $str1.$word; 
			else
				$str1 = $str1." ".$word;
		}
		$count++;
	}
	if($c == 0)
		return $str1;
	else
		return $str2;
}

function substring($course_name, $colCount){
	$words =  str_word_count($course_name,1);
	
	$subwords = array();
	$i = 0;
	if($colCount >= 7){
		$str = "";
		foreach($words as $word){
			if((strlen($str) + strlen($word)) >= 13){
                if(strlen($str)==0){
                    $str = $word;
                    $subwords[$i++] = $str;
                    $str = "";
                }else{
                    $subwords[$i++] = $str;
                    $str = $word;
                }
			}else{
				if(strlen($str)==0)
					$str = $word;
				else
					$str = $str." ".$word;
			}
		}
		$subwords[$i] = $str;
		return $subwords;
	}
	else if($colCount >= 5){
		$str = "";
		foreach ($words as $word){
			if((strlen($str) + strlen($word)) >= 16){
				$subwords[$i++] = $str;
				$str = $word;
			}else{
				if(strlen($str)==0)
					$str = $word;
				else
					$str = $str." ".$word;
			}
		}
		$subwords[$i] = $str;
		return $subwords;
	}else
	{
		if(strlen($course_name)>50){
			return substring($course_name,5);
		}
		$subwords[0] = splitstring($course_name,0);
		if(strlen($course_name) > strlen($subwords[0])){
			$subwords[1] = splitstring($course_name,1);
			return $subwords;
		}
		else{
			return $subwords;
		}
	}
	
}
 