<?php

namespace Xenopedia\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xenopedia\UserBundle\Entity\User;
use Xenopedia\SiteBundle\Entity\Cliche;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XenopediaSiteBundle:Site:layoutLoremIpsum.html.twig');
    }
	
	public function testAction($idCliche)
	{

							
		$userManager = $this->get('fos_user.user_manager');
		$user = $userManager->findUserBy(array('username' => 'Sheika915'));

		 if($user === null)
		{
			throw $this->createNotFoundException('User[id='.$id.'] inexistant.');
		}
		
		$cliche = $this->getDoctrine()
						->getManager()
						->find('XenopediaSiteBundle:Cliche', 1); 
		// On récupère l'EntityManager
		
		$cliche->voter();
		
		echo $cliche->getContenu() . ' Vote =' . $cliche->getVote();
		$em = $this->getDoctrine()->getManager();
 
		// Étape 1 : On « persiste » l'entité
		$em->persist($cliche);
 
		// Étape 2 : On « flush » tout ce qui a été persisté avant
		$em->flush();
	
		return $this->Redirect("#");
	}
}
