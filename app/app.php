<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Scrabble.php';


    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'));

    $app->get('/', function() use ($app) {


        return $app['twig']->render('home.html.twig');
    });

    $app->post('/result', function() use ($app) {
        $new_score = new Scrabble;
        $new_word = $_POST['word'];
        $output = $new_score->findScore($new_word);
        return $app['twig']->render('result.html.twig', array('output' => $output));
    });


    return $app;
?>
