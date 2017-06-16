<?php
include 'class.Maths.php';
class Probability extends Maths{
	public function Factorial($number){
		$_factorial = 1;
		for($i=1;$i<=$number;$i++){			
		$_factorial = $_factorial*($i);
		}
		return $_factorial;
	}
	public function Permutation($superscript,$subscript){
	return $this->Factorial($superscript)/$this->Factorial($superscript-$subscript);	
	}
	public function Combination($superscript,$subscript){
	return $this->Permutation($superscript,$subscript)/$this->Factorial($subscript);
	}
}
$maths = new Probability();
echo $maths->Factorial(0);
echo "<br>";
echo $maths->Permutation(1/2,0);
echo "<br>";
echo $maths->Combination(1/2,0);