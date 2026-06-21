<?php
/**
 * Define $version
*/
$version = '1.0.2';
if($conf['prod'] === false)
{
	$version = time();
}

?>