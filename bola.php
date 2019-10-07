<?php

interface Tossable 
{
	function Toss();
}

class Ball implements Tossable
{
	protected $brandName ;
	
	function __construct ($brandName)
	{
		$this- > brandName = $brandName
	}
	
	function getBrandName ()
	{
		return $this -> brandName ;
	}
	
	function Toss ()
	{
		echo $this ->brandName. "Dilemparkan" ;
	}
	
	function Bounce ()
	{
		echo $this -> brandName. "Dilambungkan";
	}
}
class Rock implements Tossable
{
	function Toss ()
	{
		echo "Dlempar" ;
	}
}
class Baseball extends Ball 
{
	function __construct ($brandName)
	{
		$this-> brandName = $brandName ;
	}
}
class Football extends Ball
{
	function __construct ($brandName)
	{
		$this -> brandName = $brandName ;
	}
	
}
	$Baseball = new Baseball ("Baseball");
	$Football = new Football ("Football");
	
	$Football -> Toss () ;
	echo "<br>" ;
	$Football -> Bounce () ;
	echo "<br><br>" ;
	$Baseball -> Toss () ;
	echo "<br>" ;
	$Football -> Bounce () ;
	
	?>

		