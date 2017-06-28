<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Places.php";

    session_start();

    if(empty($_SESSION['list_of_cities'])) {
        $_SESSION['list_of_cities'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));



    $app->get("/", function() use ($app) {
      return $app["twig"]->render("places.html.twig", array("places" => Place::getAll()));
    });

    $app->post("/places", function( use ($app) {
      $place = new Place($_POST['city']);
      $place->save();
      return $app['twig']->render('generate_place.html.twig', array('newcity' => $place));
    });
 ?>
