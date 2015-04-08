<?php

namespace Xenopedia\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Config\FileLocator;


class QuoteController extends Controller
{
    public function indexAction()
    {
		//$fichier = array("Citation");
		$configDirectories = array(__DIR__);
		$locator = new FileLocator($configDirectories);
		$path = $locator->locate('citation.txt', null, false);
		$fichier = file($path[0]);
		
		$total = count($fichier)-1; // Total du nombre de lignes du fichier

		$i = mt_rand(0, $total); // Nombre au hasard entre 1 et le total du nombre de lignes
        return new Response($fichier[$i]);
    }
}
