<?php

namespace Jon\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $blogs = $em->getRepository("JonBlogBundle:Blog")->findBy(['active' => 1], ['fecha' => 'DESC']);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($blogs, $request->query->getInt('page', 1), 10);

        return $this->render('@blog/Resources/views/Default/index.html.twig', [
            'menu' => 'blog',
            'blogs' => $pagination,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
