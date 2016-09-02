<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    public function testAction()
    {
        $em = $this->getDoctrine()->getManager();
        /*$user = new User;
        $user->setFirstName('Jigesh');
        $user->setLastName('Raval');
        $user->setEmail('jigeshraval89@gmail.com');
        $user->setUsername('jigesh3');
        $user->setPassword('ravalera1');


        $em->persist($user);

        $em->flush();*/

        $id_user = $em->getRepository('AppBundle:User')->find(5);
        $id_user->setUsername('newJigesh');
        $em->flush();

        return new Response('test page');
    }
}
