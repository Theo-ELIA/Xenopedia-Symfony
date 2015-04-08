<?php

namespace Xenopedia\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Xenopedia\SiteBundle\Entity\Cliche;
use Xenopedia\SiteBundle\Form\ClicheType;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cliche controller.
 *
 * @Route("/cliche")
 */
class ClicheController extends Controller
{
    /**
     * Lists all Cliche entities.
     *
     * @Route("/", name="cliche")
     * @Method("GET")
     * @Template()
     */
	public function voterClicheAction($idCliche)
	{
		$em = $this->getDoctrine()->getManager();
		$clicheVote = $this->getDoctrine()
						->getManager()
						->find('XenopediaSiteBundle:Cliche', $idCliche); // 1er argument : le nom de l'entité
															// 2e argument : l'id de l'instance à récupérer
		$usr= $this->get('security.context')->getToken()->getUser();
		
		
		
		$UserAVote = false;

		foreach($usr->getVotes() as $cliche)
		{
			if(($cliche->getId())==$idCliche)
			{
				$UserAVote = true;
				
			}
		}
		
		if($UserAVote == false)
		{
			$usr->addVote($clicheVote);
			$cliche->setVote($clicheVote->getVote()+1);

		}
		else
		{
			$em->clear();
			 $this->get('session')->getFlashBag()->add('noticeAlertJS', "Vous avez déja voté pour ce cliché aujourd'hui!");
		}
		
		
		$em->flush();
		
		return $this->Redirect($this->getRequest()->headers->get('referer'));
	}
	
}
