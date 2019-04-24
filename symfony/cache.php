<?php
/**
 * 
 */

require_once __DIR__."/../vendor/autoload.php";

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

$cache = new FilesystemAdapter();

// dump($cache);
// die;


use Symfony\Contracts\Cache\ItemInterface;

// The callable will only be executed on a cache miss.
$value = $cache->get('my_cache_key', function (ItemInterface $item) {
    $item->expiresAfter(3600);

    // ... do some HTTP request or heavy computations
    // $computedValue = 'foobar';
    $computedValue = rand(0,9);

    return $computedValue;
});

echo $value; // 'foobar'

die;

// ... and to remove the cache key
$cache->delete('my_cache_key');

?>