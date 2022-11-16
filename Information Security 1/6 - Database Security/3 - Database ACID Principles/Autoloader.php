<?php
function my_autoloader($class)
{
    require $class . '.php';
}
spl_autoload_register('my_autoloader');

