<?php

namespace App\Model;

use App\Entities\Comment;

class CommentManager extends BaseManager
{
    // Create :
    public function createPost(Comment $comment): bool
    {
        if( isset($_POST['title_comment']) && isset($_POST['content_comment']) )
        {
            $title_comment = trim($_POST['title_comment']);
            $content_comment = trim($_POST['content_comment']);

            $createComment = $this->pdo->prepare("INSERT INTO comment (title_comment, content_comment) VALUES (:title_comment, :content_comment)");
            $createComment->bindParam(':title_comment', $title_comment);
            $createComment->bindParam(':content_comment', $content_comment);
            $createComment->execute();
        }
        return true;
    }

    // Read :
    public function getAllComment(): array
    {
        $allComment = $this->pdo->query("SELECT * FROM comment ORDER BY id_comment DESC");
        $allComment->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Comment');
        return $allComment->fetchAll();
    }

    public function getPostById(int $id_post): Post
    {
        $CommentById = $this->pdo->prepare("SELECT * FROM comment WHERE id_comment = :id_comment");
        $CommentById->bindValue(':id_post', $id_post, \PDO::PARAM_INT);
        $CommentById->execute();
        $CommentById->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Comment');

        return $CommentById->fetch();
    }
}