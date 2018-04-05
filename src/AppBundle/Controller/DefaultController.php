<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'menu' => 'home',
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig', [
            'menu' => 'about',
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/grupos", name="grupos")
     */
    public function gruposAction(Request $request)
    {
        // replace this example code with whatever you need
        $fecha1 = date("Y")."-06-01";
        $fecha2 = date("Y")-1;
        $fecha2 .= "-06-01";
        $em = $this->getDoctrine()->getManager();
        $grupos = $em->getRepository("JonBlogBundle:Grupos")
            ->createQueryBuilder('g')
            ->where('g.anyo > :fecha2')
            ->andWhere('g.anyo < :fecha1')
            ->andWhere('g.active = 1')
            ->setParameter('fecha1', $fecha1)
            ->setParameter('fecha2', $fecha2)
            ->getQuery()->getResult();
        return $this->render('@blog/Resources/views/Grupos/grupos.html.twig', [
            'menu' => 'grupos',
            'grupos' => $grupos,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/tienda", name="tienda")
     */
    public function tiendaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/tienda.html.twig', [
            'menu' => 'tienda',
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
