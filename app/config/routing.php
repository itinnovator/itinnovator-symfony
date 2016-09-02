<?php
// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_show', new Route('/blog', array(
    '_controller' => 'AppBundle:Blog:show',
)));

return $collection;
