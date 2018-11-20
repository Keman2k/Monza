<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'voiures_global' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::ferrariAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Ferrari',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_F40' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::F40Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/F40',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_F430' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::F430Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/F430',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Laferrari' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::LaferrariAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Laferrari',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Lamborghini' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::LamborghiniAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Lamborghini',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Gallardo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::GallardoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Gallardo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Murcielago' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::MurcielagoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Murcielago',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Pagani' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::PaganiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pagani',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Maserati' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\VoitureController::MaseratiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Maserati',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Circuits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::CircuitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Circuits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Brand' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::BrandsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Brands',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Bugatti' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::BugattiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Bugatti',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Charrade' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::CharradeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Charrade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Dijon' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::DijonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Dijon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Donington' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::DoningtonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Donington',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Fiorano' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::FioranoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Fiorano',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Hokenheimring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::HokenheimringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Hokenheimring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Imola' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::ImolaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Imola',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Magny' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MagnyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Magny',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Misano' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MisanoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Misano',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Monza' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MonzaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Monza',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Nordschleife' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::NordschleifeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Nordschleife',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Nürburgring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::NürburgringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Nürburgring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Paul' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::PaulAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Paul',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Pescara' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::PescaraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Pescara',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Rouen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::RouenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Rouen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_Vallelunga' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\CircuitsController::VallelungaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Vallelunga',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\UserController::InscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'monza_connection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MonzaBundle\\Controller\\UserController::ConnectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connection',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
