<?php
class PrimeTable 
{
	public function display($len) 
	{
		$prime_arr = array();
		for ($num = 2; count($prime_arr) < $len; $num++) {
			for($i = 2; $i < $num; $i++) {
				if($num % $i == 0) {
					break;
				}
			}
			if($i === $num) {
				$prime_arr[] = $num;
			}
		}
		echo "\t|\t";
		for ($i=0; $i < $len; $i++) {
			echo "$prime_arr[$i]\t";
		}
		echo "\n";
		for ($i=0; $i < $len; $i++) {
			echo "---------";
		}
		echo "\n";
		for( $j = 0; $j < $len;  $j++ ) {
			echo "$prime_arr[$j]\t|\t";
			for($i=0; $i < $len; $i++) {
				echo $prime_arr[$i] * $prime_arr[$j]."\t";
			}	
			echo "\n";
		}

	}

	public function checkValidArgs($args) {
		if( $args[1] === '--help') {
			echo "usage: primetable --options\n\n";
			echo "\tcount\t\t\t\tPrint no of prime table\n\thelp\t\t\t\tfor display command syntax and options\n\n";
			return false;
		} else if( $args[1] === '--count') {
			if( count($args) !== 3 ) {
				echo "Invalid args\n";
				return false;
			}  elseif( intval($args[2]) <= 0 ) {
				echo "Count value more then or equal to 1\n";
				return false;
			} 
		} else {
			echo "Invalid options\n";
			return false;
		}	
		return true;
		
	}
}

