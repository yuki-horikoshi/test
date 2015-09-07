<?php
class Controller_Test extends Controller
{
	public function index() 
	{
		$a = 1;
		if ($a == 1) {
			echo 'string';
		}

		for ($i = 0; $i < 10; $i++)
		{
			echo $i;
		}

		# Macで追加
		$b = 37;
		echo $b;

		return ;
	}
}
