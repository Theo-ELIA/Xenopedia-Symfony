<?php

namespace Xenopedia\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$categorie = $this->getDoctrine()
                ->getManager()
                ->find('XenopediaSiteBundle:categorieMinorite', 11);
		$minorite = $this->getDoctrine()
                ->getManager()
                ->find('XenopediaSiteBundle:Minorite', 21);
		$minorite->getCategories()->add($categorie);
		
		return new Response(var_dump($minorite->getCategories()->toArray()));
        return $this->render('XenopediaAdminBundle:Display:layout.html.twig');
    }
}
