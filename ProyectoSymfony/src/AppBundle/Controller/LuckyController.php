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

class LuckyController
{
    /**
     * @return Response
     * @Route("Lucky/number")
     */
        public function numberAction()
        {
            $number = random_int(0,100);
            return new Response('<html><body>Lucky number :'.$number. '</body>');
        }
}