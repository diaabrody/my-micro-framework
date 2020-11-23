<?php

namespace App\Controller;
use App\Repositories\Article\IArticleRepository;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbastractController
{
    public function index( Request $request, IArticleRepository $articleRepository){
        var_dump($request);die;
        echo $this->twig->render('article.twig');
    }
}
