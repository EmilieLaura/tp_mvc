<?php

namespace App\Model;

use App\Entity\Post;

class PostManager extends BaseManager
{

    // Create Post :
    public function createPost(Post $post): bool
    {
        if( isset($_POST['title_post']) && isset($_POST['content_post']) )
        {
            $title_post = trim($_POST['title_post']);
            $content_post = trim($_POST['content_post']);

            $createPost = $this->pdo->prepare("INSERT INTO posts (title_post, content_post) VALUES (:title_post, :content_post)");
            $createPost->bindParam(':title_post', $title_post);
            $createPost->bindParam(':content_post', $content_post);
            $createPost->execute();
        }
        return true;
    }

    // Read Post :
    public function getAllPosts(): array
    {
        $allPosts = $this->pdo->query("SELECT * FROM posts ORDER BY id_post DESC");
        $allPosts->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Post::class);
        return $allPosts->fetchAll();
    }

    public function getPostById(int $id_post): Post
    {
        $postById = $this->pdo->prepare("SELECT * FROM posts WHERE id_post = :id_post");
        $postById->bindValue(':id_post', $_GET['id_post'], \PDO::PARAM_INT);
        $postById->execute();
        $postById->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post');

        return $postById->fetch(\PDO::FETCH_ASSOC);
    }

    // Update Post :
    public function updatePost(Post $post)
    {
        // TODO - getPostById($post->getId())
    }

    // Delete :
    public function deletePost(int $id_post)
    {
        if( isset( $_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id_post']) )
        {
            $deletePost = $this->pdo->prepare("DELETE FROM posts WHERE id_post = :id_post");
            $deletePost->bindParam(':id_post', $_GET['id_post']);
            $deletePost->execute();
        }
    }
}