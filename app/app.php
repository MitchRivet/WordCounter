<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('repeatcounter_input.html.twig');
    });

    $app->get("/counter_results", function() use ($app) {
        $new_repeatcounter = new RepeatCounter;
        $repeats_counted = $new_repeatcounter->countRepeats($_GET['input_string'], $_GET['word_to_count']);
        return $app['twig']->render('repeatcounter_result.html.twig', array('result' => $repeats_counted));
    });

    return $app;

?>
