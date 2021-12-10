<?php

namespace App\Controller;

abstract class BaseController
{
    private $templateFile = './Views/template.php';
    private $viewsDir = './Views/';
    protected $params;

    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;

        $method = 'execute' . ucfirst($action);
        if (!is_callable([$this, $method])) {
            throw new \RuntimeException('L\'action "' . $method . '" n\'est pas définie sur ce module');
        }
        $this->$method();
    }

    public function render(string $template, array $arguments, string $title): void
    {
        $view = $this->viewsDir . $template . '.php';

        foreach ($arguments as $key => $value) {
            ${$key} = $value;
        }

        ob_start();
        require $view;
        $content = ob_get_clean();
        require $this->templateFile;
    }
}