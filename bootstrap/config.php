<?php

use App\Repositories\Article\ArticleRepository;
use App\Repositories\Article\IArticleRepository;
use function DI\create;

return
    [
        IArticleRepository::class =>create(ArticleRepository::class) ,
    ];