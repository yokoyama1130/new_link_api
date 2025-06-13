<?php
declare(strict_types=1);

// src/Controller/Api/PostsController.php

namespace App\Controller\Api;

use App\Controller\AppController;

class PostsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Hello World', 'body' => '最初の投稿だよ！'],
            ['id' => 2, 'title' => 'CakePHP最高', 'body' => 'JSON APIも余裕！']
        ];

        $this->set([
            'posts' => $posts,
            '_serialize' => ['posts'],
        ]);
    }
}
