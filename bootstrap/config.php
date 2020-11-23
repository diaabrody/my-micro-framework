<?php

use App\Repositories\Article\ArticleRepository;
use App\Repositories\Article\IArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use function DI\create;

return
    [
        IArticleRepository::class => create(ArticleRepository::class) ,
        Environment::class =>function(){
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . "/../App/Views");
            return new Environment($loader);
        },
        Request::class =>function(){
            return Request::createFromGlobals();
        }
    ];