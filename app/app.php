<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/NumberToWords.php";
    date_default_timezone_set('America/Los_Angeles');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/result", function() use ($app) {
        $newNumberToWord = new NumberToWords;
        $result = $newNumberToWord->getWords($_POST['input_number']);
        return $app['twig']->render('home.html.twig', array('result' => $result));
    });

    return $app;
?>
