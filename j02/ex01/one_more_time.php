<?php
	date_default_timezone_set('UTC');
	$nb = preg_match("/\b(\/?:[L|l]undi|[M|m]ardi|[M\m]ercredi|[j|J]eudi|[v|V]endredi|[S|s]amedi|[d|D]imanche)\s[0-3]?[0-9]\s(\/?:[J|j]anvier|[f|F]evrier|[M|m]ars|[A|a]vril|[m|M]ai|[J|j]uin|[J|j]uillet|[A|a]out|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]ecembre)\s[0-9][0-9][0-9][0-9]\s[0-2][0-9]:[0-6][0-9]:[0-6][0-6]/", $argv[1]);
	
	function nb_mois($string)
	{
			if (preg_match("/[J|j]anvier/", $string))
				return (1);
			else if (preg_match("/[f|F]evrier/", $string))
				return (2);
			else if (preg_match("/[M|m]ars/",$string))
				return (3);
			else if (preg_match("/[A|a]vril/", $string))
				return (4);
			else if (preg_match("/[m|M]ai/", $string))
				return (5);
			else if (preg_match("/[J|j]uin/", $string))
				return (6);
			else if (preg_match("/[J|j]uillet/", $string))
				return (7);
			else if (preg_match("/[A|a]out/", $string))
				return (8);
			else if (preg_match("/[S|s]eptembre/", $string))
				return (9);
			else if (preg_match("/[O|o]ctobre/", $string))
				return (10);
			else if (preg_match("/[N|n]ovembre/",$string))
				return (11);
			else if (preg_match("/[D|d]ecembre/", $string))
				return (12);
	}
	if ($nb == 1)
	{
		$array = preg_split("/[ |:]/",$argv[1]);
		$time = mktime($array[4], $array[5], $array[6], $test = nb_mois($array[2]), $array[1], $array[3], 1);
		echo "$time\n";
	}
	else
		echo "Wrong Format\n";
?>