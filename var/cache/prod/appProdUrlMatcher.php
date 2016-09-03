<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/project')) {
            // projects__project_index
            if ($pathinfo === '/project') {
                return array (  '_controller' => 'Projects\\Bundle\\Controller\\ProjectController::indexAction',  '_route' => 'projects__project_index',);
            }

            // projects__project_add
            if ($pathinfo === '/project/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projects__project_add;
                }

                return array (  '_controller' => 'Projects\\Bundle\\Controller\\ProjectController::AddAction',  '_route' => 'projects__project_add',);
            }
            not_projects__project_add:

        }

        // homepage
        if ($pathinfo === '/test2') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
