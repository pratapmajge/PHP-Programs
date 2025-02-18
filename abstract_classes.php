<?php
	abstract class a 
	{
		abstract function print1();
	}
	class b extends a 
	{
		function print1()
		{
			echo "Derived class";
		}
	}
	$obj=new b;
	$obj->print1();
?>