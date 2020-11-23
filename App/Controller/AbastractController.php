<?php


namespace App\Controller;

use Twig\Environment;

abstract class AbastractController
{
    /**
     * @var Environment
     */
    protected $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

}