<?php

require __DIR__ . '/../vendor/autoload.php';

$config = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/../app/config.yml'));

$app = new \Silex\Application($config);

/**
 * register service provider
 */
$app->register(new \Silex\Provider\DoctrineServiceProvider());
$app->register(
    new \Silex\Provider\TwigServiceProvider(),
    [
        'twig.path' => __DIR__ . '/../src/Templates',
        'twig.options' => [
            'cache' => __DIR__ . '/../app/cache/app_template',
            'auto_reload' => true
        ]
    ]
);
$app->register(new \Silex\Provider\FormServiceProvider());
$app->register(new \Silex\Provider\SessionServiceProvider());
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\HttpFragmentServiceProvider());
$app->register(new \Silex\Provider\ValidatorServiceProvider());
$app->register(
    new \Silex\Provider\MonologServiceProvider(),
    ['monolog.logfile' => __DIR__ . '/../app/logs/development.log']
);
$app->register(new \Silex\Provider\TranslationServiceProvider());

$app->mount('/', new \ExpressLibrary\Controllers\Front($app));
$app->mount('/admin', new \ExpressLibrary\Controllers\Back($app));

$app['db'] = function() {
    return \Doctrine\DBAL\DriverManager::getConnection(
        [
            'dbname' => 'perpus',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'],
        new \Doctrine\DBAL\Configuration());
};

if ($app['debug']) {
    Symfony\Component\Debug\Debug::enable(E_ALL, true);
    $app->register(new Silex\Provider\WebProfilerServiceProvider(), [
        'profiler.cache_dir' => __DIR__ . '/../app/cache/profiler'
    ]);
}

$app->run();
