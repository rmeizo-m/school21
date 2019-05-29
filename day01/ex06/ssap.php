<?php
function ft_split($str)
	{
		$Nevstr = explode(" ", $str);
		$word = array_values(array_filter($Nevstr));
		sort($word);
		return ($word);
	}
	if ($argc > 1)
	{
		$arr = array();
		for ($i = 1; $i < count($argv); $i++)
		{
			$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
			$dell_space = ft_split($str);
			for ($j = 0; $j < count($dell_space); $j++) {
				$Nevstr = array_push($arr, $dell_space[$j]);
			}
		}
		sort($arr);
		for ($i = 0; $i < count($arr); $i++)
			echo ($arr[$i]."\n");
	}
?>
