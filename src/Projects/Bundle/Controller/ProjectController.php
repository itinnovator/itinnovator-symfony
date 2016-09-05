<?php

namespace Projects\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Projects\Bundle\Entity\Project;
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
            'service' => 'Service',
            'project-title' => 'Project Title',
            'project-description' => 'Project Description',
            'project-duration' => 'Project Duration',
            'min-budget-price' => 'Min Budget Price',
            'max-budget-price' => 'Max Budget Price'
        ];

        $datas = $this->core->validateFields($fields);

        $project = new Project;
        $project->setProjectTitle($datas->project_title);
        $project->setProjectDescription($datas->project_description);
        $project->setProjectDuration($datas->project_duration);
        $project->setMinBudgetPrice($datas->min_budget_price);
        $project->setMaxBudgetPrice($datas->max_budget_price);
        $project->setIdUser('1');
        $project->setIdCurrency('1');

        $db = $this->getDoctrine()->getManager();
        $db->persist($project);
        $db->flush();

        return $this->core->json('success', 'Project saved successfully with id - '.$project->getId());
    }
}
