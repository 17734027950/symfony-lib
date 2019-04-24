<?php
/**
 * 
 */

require_once __DIR__."/../vendor/autoload.php";

use Symfony\Component\Finder\Finder;

$finder = new Finder();
// find all files in the current directory
$finder->files()->in(__DIR__);

// check if there are any search results
if ($finder->hasResults()) {
    // ...
}

foreach ($finder as $file) {
    $absoluteFilePath = $file->getRealPath();
    $fileNameWithExtension = $file->getRelativePathname();

    dump($absoluteFilePath);
    dump($fileNameWithExtension);
    // ...
}


?>