<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CetController extends AbstractController
{

    /**
     * @Route("/", name="cet_conteudo")
     */

    public function number()
    {
        $number = random_int(0, 100);

       return $this->render('lucky/number.html.twig', [
           'number' => $number,
       ]);
    }
}
