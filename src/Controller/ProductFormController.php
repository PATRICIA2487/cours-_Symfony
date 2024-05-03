<?php

namespace App\Controller;

use App\Entity\Products;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductFormController extends AbstractController
{
    #[Route('/product/form', name: 'app_product_form')]
    public function index(): Response
    {
        $product = new Products();
        $form = $this->createForm(ProductType::class, $product);

        return $this->render('product_form/index.html.twig', [
            'form' => $form,
        ]);
    }
}
