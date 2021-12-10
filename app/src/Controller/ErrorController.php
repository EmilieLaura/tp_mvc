<?php

namespace App\Controller;

class ErrorController extends BaseController
{
    public function executeError404()
    {
        $this->render(
            'Frontend/error404',
            [],
            'Page d\'erreur'
        );
    }
}