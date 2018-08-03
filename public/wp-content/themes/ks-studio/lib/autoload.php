<?php
function framework_autoload($class_name)
{
	$filename = __DIR__ . '/' . str_replace('\\', '/', ucwords($class_name)) . '.php';;
	if (file_exists($filename)) {
		include $filename;
	}
}

spl_autoload_register('framework_autoload');