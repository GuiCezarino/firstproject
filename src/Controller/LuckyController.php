<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    /**
     * @Route("/", name="lucky_number")
     */

    public function getNumber()
    {

      $posts = [
          [
              'id' => 1,
              'title' => 'Post 1',
              'created_at' => '2020-02-07 14:20:01'
          ],

          [
              'id' => 2,
              'title' => 'Post 2',
              'created_at' => '2020-02-08 14:20:01'
          ],

          [
              'id' => 3,
              'title' => 'Post 3',
              'created_at' => '2020-02-09 14:20:01'
          ]
      ];


      $getNumber = random_int(0, 100);
      return $this->render('lucky/number.html.twig', [
          'title' => 'Este é um título teste',
          'number' => $getNumber,
          'posts' => $posts
      ]);
  }

  /**
   * @Route("/post/{slug}")
   */

  public function single($slug) {
      return $this->render('lucky/single.html.twig', [
          'slug' => $slug
      ]);
  }
}
