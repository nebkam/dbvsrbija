<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
	{
	#[Route('/', methods: [Request::METHOD_GET])]
	public function index(): Response
		{
		return $this->render('index.html.twig');
		}

	#[Route('/proizvodi', methods: [Request::METHOD_GET])]
	public function products(): Response
		{
		return $this->render('products.html.twig');
		}

	#[Route('/o-nama', methods: [Request::METHOD_GET])]
	public function about(): Response
		{
		return $this->render('about.html.twig');
		}
	}
