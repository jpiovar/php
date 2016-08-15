<?php 

echo("included page op.php<br>");

class Op{
	
	var $var1 = "var1 value";
	var $var2 = "var2 value";
	
	
	function getValue($locvar){
		return $locvar;		
	}
	
	function setValue($locvar){
		$this->var1 = $locvar;
	}
	
	
	
}









?>