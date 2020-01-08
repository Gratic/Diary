<?php
unflash();

$app = new App();
// $connected = Auth::check();

$app->route('home', 'HomeController', 'home');
