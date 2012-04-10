<?php
class Singleton
{
  function &getInstance() 
	{

     static $SingletonObj;

       if (!isset($SingletonObj)) 
	   {
			$m = &new Singleton;
			$SingletonObj = $m;

		}

     return $SingletonObj;
	}
}
?>