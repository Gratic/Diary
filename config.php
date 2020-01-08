<?php
spl_autoload_register(function($class)
{
	if(strpos($class, 'Controller') || $class == "App" || $class == "Auth")
	{
		include_once "./controller/" .$class .".php";
	}
	else
	{
		include_once "./model/" .$class .".php";
	}
});