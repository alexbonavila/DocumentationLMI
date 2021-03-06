<?php

require __DIR__.'/../../../../.composer/vendor/autoload.php';

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;
use Sami\RemoteRepository\GitHubRemoteRepository;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    //->exclude('stubs')
    ->in($dir = __DIR__.'/../../sami/LaravelMarketInformation/app');

$versions = GitVersionCollection::create($dir)
//    ->add('4.2', 'Laravel 4.2')
//    ->add('5.0', 'Laravel 5.0')
//    ->add('5.1', 'Laravel 5.1')
//    ->add('5.2', 'Laravel 5.2')
    ->add('master', 'LaravelMarketInformation Dev');

return new Sami($iterator, array(
    'title' => 'LaravelMarketInformation',
    'versions' => $versions,
    'build_dir' => __DIR__.'/build/%version%',
    'cache_dir' => __DIR__.'/cache/%version%',
    'default_opened_level' => 2,
    'remote_repository' => new GitHubRemoteRepository('alexbonavila/LaravelMarketInformation', dirname($dir)),
));