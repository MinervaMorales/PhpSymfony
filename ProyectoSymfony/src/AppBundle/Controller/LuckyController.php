<?php
/**
 * Created by PhpStorm.
 * User: TRASCENDT
 * Date: 25/7/2018
 * Time: 4:54 PM
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//extiende de la clase controller para el metodo render
class LuckyController extends Controller
{
    /**
     * @return Response
     * @Route("Lucky/number")
     */
        public function numberAction()
        {
            $number = random_int(0,100);
            return new Response('<html><body>Lucky number is :'.$number. '</body>');
        }

    /**
     * @Route("/base")
     */
    public function verAction()
    {
        // replace this example code with whatever you need
        return $this->render('blog.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}