<?php


namespace Xenopedia\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Xenopedia\SiteBundle\Entity\Cliche;
use Symfony\Component\HttpFoundation\Response;

class SubmissionController extends Controller
{
	public function ajouterClicheAction()
	{
		$cliche = new Cliche();
		
		$form = $this->createFormBuilder($cliche);
		
		$form = $this->createFormBuilder($cliche)
				->add('contenu','textarea')
				->add('minorite','entity',array(
				'class' => 'XenopediaSiteBundle:Minorite',
				'property' => 'nom',
				'multiple' => false))
				->getForm();
			
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
		
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			$user = $this->container->get('security.context')->getToken()->getUser();
			$cliche->setAuteur($user);
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $article dans la base de données
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($cliche);
				$em->flush();
		 
				// On redirige vers la page de visualisation de l'article nouvellement créé

				return $this->render('XenopediaUserBundle:Submission:ajouterCliche.html.twig', array(
		'form' => $form->createView(),'info' => "Le cliché a été soumis",));
			}
		}
 
	// À ce stade :
	// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
	// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
	return $this->render('XenopediaUserBundle:Submission:ajouterCliche.html.twig', array(
		'form' => $form->createView()));
	}
}
