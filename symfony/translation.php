<?php
/**
 * 
 */

require_once __DIR__."/../vendor/autoload.php";

use Symfony\Component\Translation\Translator;


$translator = new Translator('fr_FR');

dump($translator);


?>