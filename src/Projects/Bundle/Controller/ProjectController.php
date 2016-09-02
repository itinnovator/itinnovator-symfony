<?php

namespace Projects\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Project;
use Core\Bundle\Controller\Core;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ProjectController extends Controller
{

    public $request;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->core = Core::getInstance();
    }

    public function response($response)
    {
        return new Response($response);
    }

    /**
     * @Route("/project")
     */
    public function indexAction()
    {
        $q = $this->request->query->get('foo');
        return $this->response('Project Page - '.$q);
        //return $this->render('ProjectsBundle:Default:index.html.twig');
    }

    /**
    * @Route("/project/add")
    * @Method("POST")
    */
    public function AddAction()
    {
        $fields = [
            'service' => 'Servce',
            'project-title' => 'Project Title',
            'project-description' => 'Project Description',
            'project-duration' => 'Project Duration',
            'min-budget-price' => 'Min Budget Price',
            'max-budget-price' => 'Max Budget Price'
        ];

        $this->core->validateFields($fields);

        $q = $this->request->query->get('foo');
        return $this->response('Project Page - '.$q);
    }
}
