<?php

namespace Users\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Core\Bundle\Controller\Core;

class UserController extends Controller
{
    public function __construct()
    {
        $this->core = Core::getInstance();
    }
    /**
     * @Route("/user")
     */
    public function indexAction()
    {
        return $this->render('UsersBundle:Default:index.html.twig');
    }

    /**
    * @Route("/user/detect/country")
    */
    public function getCountryFromIpAction()
    {
        return $this->core->response($this->core->getCountryFromIp());
    }
}
