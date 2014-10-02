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

        // Siteweb_Client_home
        if (preg_match('#^/(?P<page>\\d*)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Siteweb_Client_home')), array (  '_controller' => 'SiteWeb\\ClientBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // Siteweb_Client_view
            if (0 === strpos($pathinfo, '/advert') && preg_match('#^/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Siteweb_Client_view')), array (  '_controller' => 'SiteWeb\\ClientBundle\\Controller\\AdvertController::viewAction',));
            }

            // Siteweb_Client_add
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'SiteWeb\\ClientBundle\\Controller\\AdvertController::addAction',  '_route' => 'Siteweb_Client_add',);
            }

        }

        // Siteweb_Client_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Siteweb_Client_edit')), array (  '_controller' => 'SiteWeb\\ClientBundle\\Controller\\AdvertController::editAction',));
        }

        // Siteweb_Client_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Siteweb_Client_delete')), array (  '_controller' => 'SiteWeb\\ClientBundle\\Controller\\AdvertController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
