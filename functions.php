<?php

//
// Load a view, if an array is the second parameter, load array with key giving the name
// of the variable. (ex: ["bus" => "voiture"] will be $bus = "voiture" in the view)
//
function view($view, $vars_array = null)
{
	if($vars_array != null)
	{
		foreach ($vars_array as $var_name => $value) {
			$$var_name = $value;
		}
	}

	include_once "./view/$view.php";
}

//
// Generate a link to a route.
// If array of params given, generate with parameters.
// If echo true will echo to the HTML document.
//
function url($route, $params = null, $echo = true)
{
	if($echo)
	{
		if($params == null)
		{
			echo "./?route=$route";
		}
		else
		{
			$param_str = "";
			foreach ($params as $param_key => $value) {
				$param_str .= "&$param_key=$value";
			}
			echo "./?route=$route" . $param_str;
		}
	}
	else
	{
		if($params == null)
		{
			return "./?route=$route";
		}
		else
		{
			$param_str = "";
			foreach ($params as $param_key => $value) {
				$param_str .= "&$param_key=$value";
			}
			return "./?route=$route" . $param_str;
		}
	}
	
}

//
// Return the value with the key $key of the session else false.
//
function session($key = null)
{
	if($key === null)
		return $_SESSION;
	else if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	else
		return false;
}

//
// Will delete terminated data OR down by 1 if not equal to 0.
//
function unflash()
{
	if(isset($_SESSION['flash']))
	{
		foreach ($_SESSION['flash'] as $live => $live_array) {
			if($live == 0)
			{
				foreach ($_SESSION['flash'][0] as $flash_key) {
					unset($_SESSION[$flash_key]);
				}
				unset($_SESSION['flash'][0]);
			}
			else
			{
				$_SESSION['flash'][$live - 1] = $_SESSION['flash'][$live];
				unset($_SESSION['flash'][$live]);
			}
		}
	}
}

//
// Will be set in the session for a limited time
//
function flash($key, $value, $live = 1)
{
	$_SESSION[$key] = $value;
	$_SESSION['flash'][$live][] = $key;
}


//
//	Redirection
//
function redirect($link)
{
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "?route=$link";

	header("Location: http://$host$uri/$extra");
	exit();
}