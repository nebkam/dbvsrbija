<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
	{
	#[Route('/', methods: [Request::METHOD_GET])]
	public function index(): Response
		{
		return $this->render('index.html.twig', ['section' => 'home']);
		}

	#[Route('/proizvodi/{slug}', methods: [Request::METHOD_GET])]
	public function productDetails(Product $product): Response
		{
		return $this->render('productDetails.html.twig', [
			'section' => 'products',
			'product' => $product
		]);
		}

	#[Route('/proizvodi', methods: [Request::METHOD_GET])]
	public function products(ProductRepository $repository): Response
		{
		return $this->render('products.html.twig', [
			'section'  => 'products',
			'products' => $repository->findAll()
		]);
		}

	#[Route('/o-nama', methods: [Request::METHOD_GET])]
	public function about(): Response
		{
		return $this->render('about.html.twig', ['section' => 'about']);
		}
	}
