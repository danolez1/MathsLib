<?php
include 'class.Maths.php';
class Euclid extends Maths{
	private $_result = array();
	private $gcd;
	private function compareValue($val1,$val2){
		$difference = $val1 - $val2;
		if($difference >0) return 1;
		if($difference<0) return -1;
		if($difference==0) return 0;
	}
	public function gcdCalculator($var1,$var2){						    	    	
				$process = $var1%$var2;
				array_push($this->_result,$process);
		    	if($process !=0) $this->gcdCalculator($var2,$process);		    	
		    	else {
		    		if(count($this->_result)>1)$this->gcd = $this->_result[count($this->_result)-2];
		    		else $this->gcd = $var2;
		    		return $this->gcd;
		    	}
	}
	public function gcd($val1,$val2){
		if(empty($val1)||empty($val2)){						
		}
		else{
			try{
				$compare = $this->compareValue($val1, $val2);
				switch($compare){
					case -1:
					$this->gcdCalculator($val2,$val1);
					return $this->gcd;
					case 0:
					return $val1;

					case 1:							
					 $this->gcdCalculator($val1,$val2);
					return $this->gcd;

					default:
					return null;
				}
			}
			catch(Exception $e){
				throw new Exception("Parameter Not Valid : Input in two valid number");
			}
		}
	}
}

$euclid  = new Euclid();
echo($euclid->gcd(6409,42823));
