<?php

// Chargé de gérer les requêtes de l'url : quel contrôleur appelé

namespace App\Framework;

use App\Controller\ErrorController;

class Router
{
    public function getController()
    {
        $xml = new \DOMDocument();
        $xml->load(__DIR__ . './../../Config/routes.xml');
        $routes = $xml->getElementsByTagName('route');

        isset($_GET['p']) ? $path = strtolower(htmlspecialchars($_GET['p'])): $path = '/';

        foreach($routes as $route)
        {
            if($path === $route->getAttribute('p'))
            {
                $controllerClass = 'App\\Controller\\' . $route->getAttribute('controller');
                $action = $route->getAttribute('action');
                $params = [];
                if($route->hasAttribute('params'))
                {
                    $keys = explode(',', $route->getAttribute('params'));
                    foreach($keys as $key)
                    {
                        $params[$key] = $_GET[$key];
                    }
                }
                return new $controllerClass($action, $params);
            }
        }

        return new ErrorController('error404');
    }

}