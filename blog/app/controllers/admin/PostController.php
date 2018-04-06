<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PostController extends BaseController {

    public function getIndex() {
        global $pdo;
        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
    }

    public function getInsert() {
        return $this->render('admin/insert-post.twig');
    }

    public function postInsert() {
        global $pdo;
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
        $query = $pdo->prepare($sql);

        $queryResult = $query->execute([
            'title' => $title,
            'content' => $content
        ]);
        return $this->render('admin/insert-post.twig', ['queryResult' => $queryResult]);
    }
}