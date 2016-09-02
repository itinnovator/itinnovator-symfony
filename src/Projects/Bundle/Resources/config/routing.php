<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('add_project', new Route('project/add', [
    '_controller' => 'Projects:Project:AddAction'
]));

return $collection;
