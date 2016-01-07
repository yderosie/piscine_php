<?php 
	class Color
	{
		public $red = 0;
		public $green = 0;
		public $blue = 0;
		public static $verbose = False;
		
		function __construct(array $color)
		{
			if (array_key_exists('rgb', $color))
      		{
				$this->red = (int)($color['rgb'] & 0xFF0000) >> 16;
				$this->green = (int)($color['rgb'] & 0xFF00) >> 8;
				$this->blue = (int)($color['rgb'] & 0xFF);
      		}
			if (array_key_exists('red', $color)) {
				$this->red = $color['red'];
			}
			if (array_key_exists('green', $color)) {
				$this->green = $color['green'];
			}
			if (array_key_exists('blue', $color)){
				$this->blue = $color['blue'];
			}
			if (self::$verbose == true)
			{
				print('Color(red: ' . round($this->red) .', green: ' . round($this->green) . ',blue: ' . round($this->blue) .') constructed.' . PHP_EOL);
			}
			return;
		}

		function __destruct()
		{
			if (self::$verbose == true )
			{
				print('Color(red: ' . round($this->red) .', green: ' . round($this->green) . ',blue: ' . round($this->blue) .') destructed.' . PHP_EOL);
			}
			return;
		}

		function __toString()
		{
			return('Color(red: ' . round($this->red) .', green: ' . round($this->green) . ',blue: ' . round($this->blue) .')');
		}

		public function add($addcolor)
		{
			$tmp = clone $this;
			$tmp->red += $addcolor->red;
			$tmp->green += $addcolor->green;
			$tmp->blue += $addcolor->blue;
			if (self::$verbose == true)
				print('Color(red: ' . round($tmp->red) .', green: ' . round($tmp->green) . ',blue: ' . round($tmp->blue) .') constructed.' . PHP_EOL);
			return($tmp);
		}

		public function sub($addcolor)
		{
			$tmp = clone $this;
			$tmp->red -= $addcolor->red;
			$tmp->green -= $addcolor->green;
			$tmp->blue -= $addcolor->blue;
			if (self::$verbose == true)
				print('Color(red: ' . round($tmp->red) .', green: ' . round($tmp->green) . ',blue: ' . round($tmp->blue) .') constructed.' . PHP_EOL);
			return($tmp);
		}

		public function mult($addcolor)
		{
			$tmp = clone $this;
			$tmp->red *= $addcolor;
			$tmp->green *= $addcolor;
			$tmp->blue *= $addcolor;
			if (self::$verbose == true)
				print('Color(red: ' . round($tmp->red) .', green: ' . round($tmp->green) . ',blue: ' . round($tmp->blue) .') constructed.' . PHP_EOL);
			return($tmp);
		}
	}
?>