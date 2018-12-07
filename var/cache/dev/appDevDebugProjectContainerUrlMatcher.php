<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // monza_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MonzaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'monza_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_monza_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'monza_homepage'));
            }

            return $ret;
        }
        not_monza_homepage:

        if (0 === strpos($pathinfo, '/brands')) {
            // voiures_global
            if (preg_match('#^/brands/(?P<brandId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiures_global')), array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::brandAction',));
            }

            // voiures_globalite
            if ('/brands' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::brandsAction',  '_route' => 'voiures_globalite',);
            }

        }

        elseif (0 === strpos($pathinfo, '/F')) {
            // monza_F40
            if ('/F40' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::F40Action',  '_route' => 'monza_F40',);
            }

            // monza_F430
            if ('/F430' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::F430Action',  '_route' => 'monza_F430',);
            }

            // monza_Fiorano
            if ('/Fiorano' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::FioranoAction',  '_route' => 'monza_Fiorano',);
            }

        }

        // monza_Laferrari
        if ('/Laferrari' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::LaferrariAction',  '_route' => 'monza_Laferrari',);
        }

        // monza_Lamborghini
        if ('/Lamborghini' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::LamborghiniAction',  '_route' => 'monza_Lamborghini',);
        }

        // monza_Gallardo
        if ('/Gallardo' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::GallardoAction',  '_route' => 'monza_Gallardo',);
        }

        if (0 === strpos($pathinfo, '/M')) {
            // monza_Murcielago
            if ('/Murcielago' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::MurcielagoAction',  '_route' => 'monza_Murcielago',);
            }

            // monza_Maserati
            if ('/Maserati' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::MaseratiAction',  '_route' => 'monza_Maserati',);
            }

            // monza_Magny
            if ('/Magny' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MagnyAction',  '_route' => 'monza_Magny',);
            }

            // monza_Misano
            if ('/Misano' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MisanoAction',  '_route' => 'monza_Misano',);
            }

            // monza_Monza
            if ('/Monza' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::MonzaAction',  '_route' => 'monza_Monza',);
            }

        }

        elseif (0 === strpos($pathinfo, '/P')) {
            // monza_Pagani
            if ('/Pagani' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\VoitureController::PaganiAction',  '_route' => 'monza_Pagani',);
            }

            // monza_Paul
            if ('/Paul' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::PaulAction',  '_route' => 'monza_Paul',);
            }

            // monza_Pescara
            if ('/Pescara' === $pathinfo) {
                return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::PescaraAction',  '_route' => 'monza_Pescara',);
            }

        }

        // monza_Circuits
        if ('/Circuits' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::CircuitsAction',  '_route' => 'monza_Circuits',);
        }

        // monza_Charrade
        if ('/Charrade' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::CharradeAction',  '_route' => 'monza_Charrade',);
        }

        // monza_Brand
        if ('/Brands' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::BrandsAction',  '_route' => 'monza_Brand',);
        }

        // monza_Bugatti
        if ('/Bugatti' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::BugattiAction',  '_route' => 'monza_Bugatti',);
        }

        // monza_Dijon
        if ('/Dijon' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::DijonAction',  '_route' => 'monza_Dijon',);
        }

        // monza_Donington
        if ('/Donington' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::DoningtonAction',  '_route' => 'monza_Donington',);
        }

        // monza_Hokenheimring
        if ('/Hokenheimring' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::HokenheimringAction',  '_route' => 'monza_Hokenheimring',);
        }

        // monza_Imola
        if ('/Imola' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::ImolaAction',  '_route' => 'monza_Imola',);
        }

        // monza_Nordschleife
        if ('/Nordschleife' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::NordschleifeAction',  '_route' => 'monza_Nordschleife',);
        }

        // monza_Nürburgring
        if ('/Nürburgring' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::NürburgringAction',  '_route' => 'monza_Nürburgring',);
        }

        // monza_Rouen
        if ('/Rouen' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::RouenAction',  '_route' => 'monza_Rouen',);
        }

        // monza_Vallelunga
        if ('/Vallelunga' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\CircuitsController::VallelungaAction',  '_route' => 'monza_Vallelunga',);
        }

        // monza_inscription
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\UserController::InscriptionAction',  '_route' => 'monza_inscription',);
        }

        // monza_connection
        if ('/connection' === $pathinfo) {
            return array (  '_controller' => 'MonzaBundle\\Controller\\UserController::ConnectionAction',  '_route' => 'monza_connection',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
