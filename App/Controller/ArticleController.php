<?php

namespace App\Controller;
use App\Repositories\Article\IArticleRepository;

class ArticleController extends AbastractController
{
    public function index(IArticleRepository $articleRepository){
        echo $this->twig->render('article.twig');
    }
}
