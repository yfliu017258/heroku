<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;
<<<<<<< HEAD

=======
>>>>>>> a3ecf9a8995879e03efc65dc15676a020f2067a8
// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));
<<<<<<< HEAD

=======
>>>>>>> a3ecf9a8995879e03efc65dc15676a020f2067a8
// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
<<<<<<< HEAD

=======
>>>>>>> a3ecf9a8995879e03efc65dc15676a020f2067a8
// Our web handlers
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});
<<<<<<< HEAD

$app->run();
=======
$app->run();
>>>>>>> a3ecf9a8995879e03efc65dc15676a020f2067a8
