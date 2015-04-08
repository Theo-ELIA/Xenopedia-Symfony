<?php

namespace Xenopedia\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xenopedia\UserBundle\Entity\User;
use Xenopedia\SiteBundle\Entity\Cliche;
use Doctrine\ORM\EntityRepository;

class DisplayClicheController extends Controller
{
    public function topAction($nbCliche)
    {
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:Cliche');
		$listeCliches = $repository->findByVote($nbCliche);
		
        return $this->render('XenopediaSiteBundle:Site:displayCliche.html.twig',array('titre' => 'Top ' . $nbCliche,'tab_cliche' => $listeCliches ));
    }
	
	public function indexMembreAction($userName)
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:Cliche');
		$listeCliches = $repository->getClicheFromAuteur($userName);
		
		return $this->render('XenopediaSiteBundle:Site:displayCliche.html.twig',array('titre' => 'Liste des clichés soumis par '. $userName,'tab_cliche' => $listeCliches)); 
	}
	
		public function indexMinoriteClicheAction($minorite)
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:Cliche');
		$listeCliches = $repository->getClicheParMinorite($minorite);
		
		return $this->render('XenopediaSiteBundle:Site:displayCliche.html.twig',array('titre' => 'Liste des clichés à propos des'. $minorite,'tab_cliche' => $listeCliches)); 
	}
	
	public function indexMinoriteAction()
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:Minorite');
		
		$listeMinorite = $repository->findAll();
		
		return $this->render('XenopediaSiteBundle:Site:listeMinorite.html.twig',array('tab_minorite' => $listeMinorite));
	}
	
}
