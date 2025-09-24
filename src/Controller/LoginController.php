<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request): Response
    {
        // Handle POST submission
        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $password = $request->request->get('password');

            // Dummy check (replace with real user check later)
            if ($username === 'admin' && $password === '1234') {
                // redirect to home page after login
                return $this->redirectToRoute('app_home');
            } else {
                $this->addFlash('error', 'Invalid username or password.');
            }
        }

        return $this->render('login.html.twig');
    }
}
