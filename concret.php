<?php
	interface a
	{
		public function dis();
	}
	interface b 
	{
		public function dis2();
	}
	class c implements a,b 
	{
		public function dis()
		{
			echo "interface 1<br>";
		}
		public function dis2()
		{
			echo "interface 2<br>";
		}
		public function dis3()
		{
			echo "class c<br>";
		}
	}
	$obj=new c();
	$obj->dis();
	$obj->dis2();
	$obj->dis3();
?>