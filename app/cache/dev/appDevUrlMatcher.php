<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/annonce')) {
                // annonce
                if (rtrim($pathinfo, '/') === '/annonce') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonce;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'annonce');
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'annonce',);
                }
                not_annonce:

                // annonce_create
                if ($pathinfo === '/annonce/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_annonce_create;
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::createAction',  '_route' => 'annonce_create',);
                }
                not_annonce_create:

                // annonce_new
                if ($pathinfo === '/annonce/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonce_new;
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::newAction',  '_route' => 'annonce_new',);
                }
                not_annonce_new:

                // annonce_show
                if (preg_match('#^/annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonce_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_show')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::showAction',));
                }
                not_annonce_show:

                // annonce_edit
                if (preg_match('#^/annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonce_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_edit')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::editAction',));
                }
                not_annonce_edit:

                // annonce_update
                if (preg_match('#^/annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_annonce_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_update')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::updateAction',));
                }
                not_annonce_update:

                // annonce_delete
                if (preg_match('#^/annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_annonce_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_delete')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AnnonceController::deleteAction',));
                }
                not_annonce_delete:

            }

            if (0 === strpos($pathinfo, '/avis')) {
                // avis
                if (rtrim($pathinfo, '/') === '/avis') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_avis;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avis');
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::indexAction',  '_route' => 'avis',);
                }
                not_avis:

                // avis_create
                if ($pathinfo === '/avis/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_avis_create;
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::createAction',  '_route' => 'avis_create',);
                }
                not_avis_create:

                // avis_new
                if ($pathinfo === '/avis/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_avis_new;
                    }

                    return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::newAction',  '_route' => 'avis_new',);
                }
                not_avis_new:

                // avis_show
                if (preg_match('#^/avis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_avis_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_show')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::showAction',));
                }
                not_avis_show:

                // avis_edit
                if (preg_match('#^/avis/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_avis_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_edit')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::editAction',));
                }
                not_avis_edit:

                // avis_update
                if (preg_match('#^/avis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_avis_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_update')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::updateAction',));
                }
                not_avis_update:

                // avis_delete
                if (preg_match('#^/avis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_avis_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_delete')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\AvisController::deleteAction',));
                }
                not_avis_delete:

            }

        }

        // acme_covoiturage_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_covoiturage_default_index')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '/index') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
        }
        not_index:

        if (0 === strpos($pathinfo, '/reservation')) {
            // reservation
            if (rtrim($pathinfo, '/') === '/reservation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation');
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation',);
            }
            not_reservation:

            // reservation_create
            if ($pathinfo === '/reservation/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservation_create;
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
            }
            not_reservation_create:

            // reservation_new
            if ($pathinfo === '/reservation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_update
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_reservation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_update')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::updateAction',));
            }
            not_reservation_update:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur');
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
            }
            not_utilisateur:

            // utilisateur_create
            if ($pathinfo === '/utilisateur/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_create;
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
            }
            not_utilisateur_create:

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_new;
                }

                return array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }
            not_utilisateur_new:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::showAction',));
            }
            not_utilisateur_show:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::editAction',));
            }
            not_utilisateur_edit:

            // utilisateur_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_utilisateur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::updateAction',));
            }
            not_utilisateur_update:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
