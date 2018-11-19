<?php

declare(strict_types=1);

namespace KKirsz\ExtJSExamplesBundle\Controller;

use Pimcore\Bundle\AdminBundle\Controller\AdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProductController
 * @package KKirsz\ExtJSExamplesBundle\Controller
 * @Route("/products")
 */
class ProductController extends AdminController
{
    /**
     * @Route("/index", methods={"GET"})
     */
    public function indexAction(Request $request): Response
    {
        return $this->adminJson([
            'success' => true,
            'total'   => 0,
            'data'    => [],
        ]);
    }
}
