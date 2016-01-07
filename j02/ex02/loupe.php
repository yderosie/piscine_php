<?php
	$tab = file($argv[1]);
	foreach ($tab as $elem) {
		$string .= $elem;
	}
	$i = 0;
	while($string[$i])
	{
 		/*while ($string[$i] != '<')
			$i++;*/
		//echo $string[$i]. "\n";
		$string = strstr($string, "<a");
		if ($string[$i + 1] == 'a')
		{
			while ((((($string[$i] != '<') && ($string[$i + 1] != '/')) && ($string[$i + 2] != 'a')) && ($string[$i + 3] != '>')))
			{
				$s .= $string[$i++];
				//echo "$i\n ";
			}
			$s = $s . "\n";
			/*while ($string[$i] != "<" && ($string[$i]))
			{
			//$concaternerusteavant .= $string[$i];
			//	$i++; 
				if ($string[$i + 1] != "/" && $string[$i + 2] != "a" && $string[$i + 3] != ">")
				{
				//	echo $concaternerusteavant . "\n";
					$flagaunouzero = 1;
				}
				
				$i++;
			}*/
		}
		$i++;
	}
	echo $s ."\n";




/*	echo $string;
	$array = preg_split("/<|<a/",$string);
	print_r($array);
	$i = count($array);
	$j = 0;
	while ($j < $i)
	{
		if ($array[$j][0] == "\"")
		{
			$k = 1;
			while ($array[$j][$k] != "\"")
			{
				$array[$j][$k] = strtoupper($array[$j][$k]);
				$k++;
			}
		}
		else if (preg_match("/href=/", $array[$j]))
		{
			$k = 0;
			while ($array[$j][$k] != '>' && ($array[$j][$k]))
			{
				$k++;
				echo "$array[$j][$k]";
			}
			$k++;
			while ($array[$j][$k] != "<")
			{
				$array[$j][$k] = strtoupper($array[$j][$k]);
				$k++;
			}
			echo "$k\n";
			;
		}
		$j++;
	}
	echo "$j     $k     $i\n";
	print_r($array);*/
?>