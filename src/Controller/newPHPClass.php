<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of newPHPClass
 *
 * @author Yokheved
 */
class newPHPClass {
    /**
     * @Route("/", name="acceuil") 
     * @return Response
     */
    public function index(): Response {
       return new Response('Hello world!') ;
    }
}
