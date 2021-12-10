<?php

namespace App\Controller;

// Charger d'afficher les posts sur la page d'accueil :

use App\Framework\Factories\PDOFactory;
use App\Model\PostManager;

class PostController extends BaseController
{
    //public function executeIndex(int $number = 5)
    public function executeIndex()
    {
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $index = $manager->getAllPosts();
        $this->render('Frontend/homepage',
            [
                'posts' => $index
            ],
            'Home');
    }

    public function executeShow()
    {
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $post = $manager->getPostById($this->params['id_post']);

        if (!$post) {
            header('Location: /');
            exit();
        }

        $this->render(
            $post->getTitlePost(), ['post' => $post], 'Frontend/homepage');
    }
}