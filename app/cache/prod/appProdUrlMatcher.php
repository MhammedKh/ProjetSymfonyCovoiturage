<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // acme_covoiturage_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_covoiturage_default_index')), array (  '_controller' => 'Acme\\CovoiturageBundle\\Controller\\DefaultController::indexAction',));
        }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
