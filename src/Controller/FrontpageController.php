<?php
// src/Controller/FrontpageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontpageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
#[Route('/frontpage', name: 'frontpage')]
public function index(): Response
{
    return $this->render('frontpage.html.twig');
}

}
