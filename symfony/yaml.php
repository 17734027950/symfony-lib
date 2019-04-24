<?php
/**
 * 
 */

require_once __DIR__."/../vendor/autoload.php";

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("foo: bar");
// $value = ['foo' => 'bar']

?>