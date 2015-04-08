<?php

namespace Xenopedia\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xenopedia\SiteBundle\Entity\Minorite;
use Xenopedia\SiteBundle\Entity\CategorieMinorite;
use Symfony\Component\HttpFoundation\Response;

class ManagementController extends Controller
{
	/* MINORITE */
	//Cette Fonction renvoit le formulaire d'ajout de minorité et la liste de toutes les minorités présente
	public function indexMinoriteAction()
	{
	
		$listeMinorite = self::listeMinorite();
		//On crée Le formulaire
		$minorite = new Minorite();
		$formBuilder = $this->createFormBuilder($minorite);
		
		$formBuilder->add('nom','text')
					->add('urlImage','url',array(
					'required' => false))
				->add('categories','entity',array(
						'class' => 'XenopediaSiteBundle:CategorieMinorite',
						'property' => 'nom',
						'multiple' => true,
						'expanded' => true,
						'required' => false));
						
		$form = $formBuilder->getForm();
		
		// On récupère la requête
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $minorite contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
			
	 
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $minorite dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($minorite);
				$em->flush();
	 
				// On redirige vers la page de visualisation de l'minorite nouvellement créé
				return $this->redirect($this->generateUrl('xenopedia_admin_minorite_manager',array('tab_minorite' => $listeMinorite)));
			}
		}
 
	// À ce stade :
	// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
	// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
		return $this->render('XenopediaAdminBundle:Management:minoriteManagement.html.twig',array('form' => $form->createView(),'tab_minorite' => $listeMinorite));
	}
	
	//Cette fonction liste toutes les minorité présentes dans la base de donnée
	public function listeMinorite()
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:Minorite');
		return $repository->findAll();
	}
	
	public function editMinoriteAction($idMinorite)
	{
		$em = $this->getDoctrine()->getManager();
		
		$minorite = $this->getDoctrine()
                ->getManager()
                ->find('XenopediaSiteBundle:Minorite', $idMinorite);
				
		$formBuilder = $this->createFormBuilder($minorite);
		$formBuilder->add('nom','text')
					->add('id','hidden')
					->add('urlImage','url',array(
					'required' => false))
					->add('categories','entity',array(
						'class' => 'XenopediaSiteBundle:CategorieMinorite',
						'property' => 'nom',
						'multiple' => true,
						'expanded' => true));
		$form = $formBuilder->getForm();
		//return new Response(var_dump($form['categories']));
		
		// On récupère la requête
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $minorite contient les valeurs entrées dans le formulaire par le visiteur
			
			$form->bind($request);

			
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) 
			{

				//return new Response(var_dump($form));
				// On l'enregistre notre objet $minorite dans la base de données
				$em->flush();
	 
				// On redirige vers la page de visualisation de l'minorite nouvellement créé
				return $this->redirect($this->generateUrl('xenopedia_admin_minorite_manager'));
			}
		}
 
	// À ce stade :
	// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
	// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
		return $this->render('XenopediaAdminBundle:Management:minoriteEditManagement.html.twig',array('form' => $form->createView()));
	}
	
	//FIN CATEGORIE MINORITE
	
	
	/*                                               FIN                                                 */
	
	
	
	
	//												CATEGORIE MINORITE
	/*
	
	
	
	
	*/
	public function indexCategorieMinoriteAction()
	{

		$listeCategorieMinorite = self::listeCategorieMinorite();
		
		//On crée Le formulaire
		$categorieMinorite = new CategorieMinorite();
		$formBuilder = $this->createFormBuilder($categorieMinorite);
		$formBuilder->add('nom','text')
					->add('description','textarea');
						
		$form = $formBuilder->getForm();
		
		// On récupère la requête
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $minorite contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
	 
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $minorite dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($categorieMinorite);
				$em->flush();
	 
				// On redirige vers la page de visualisation de l'minorite nouvellement créé
				return $this->redirect($this->generateUrl('xenopedia_admin_categorie_minorite_manager',array('tab_categorie_minorite' => $listeCategorieMinorite)));
			}
			
		}
		 return $this->render('XenopediaAdminBundle:Management:categorieMinoriteManagement.html.twig',array('form' => $form->createView(),'tab_categorie_minorite' => $listeCategorieMinorite));
	}
	
	public function listeCategorieMinorite()
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('XenopediaSiteBundle:categorieMinorite');
		
		return $repository->findAll();
	}
	
	public function editCategorieMinoriteAction($idCategorieMinorite)
	{
		$minorite = new CategorieMinorite();
		$minorite = $this->getDoctrine()
                ->getManager()
                ->find('XenopediaSiteBundle:CategorieMinorite', $idCategorieMinorite);
				
		$formBuilder = $this->createFormBuilder($minorite);
		$formBuilder->add('nom','text')
					->add('id','hidden')
					->add('description','textarea');
					
		$form = $formBuilder->getForm();
		
		// On récupère la requête
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $minorite contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
	 
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $minorite dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->flush();
	 
				// On redirige vers la page de visualisation de l'minorite nouvellement créé
				return $this->redirect($this->generateUrl('xenopedia_admin_categorie_minorite_manager'));
			}
		}
 
	// À ce stade :
	// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
	// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
		return $this->render('XenopediaAdminBundle:Management:categorieMinoriteEditManagement.html.twig',array('form' => $form->createView()));
	}

	/*					FIN CATEGORIE MINORITE    */
	
	
	
	
	
	
	//					FIN
	
	/* USER MANEGEMENT */
	public function indexUserAction()
	{
		// Pour récupérer le service UserManager du bundle
		$userManager = $this->get('fos_user.user_manager');
		 
		// Pour charger un utilisateur
		$listeUsers = $userManager->findUsers();
		
		return $this->render('XenopediaAdminBundle:Management:userManagement.html.twig',array('tab_user' => $listeUsers));
		
	}
	public function editUserAction($username)
	{
		
		// Pour récupérer le service UserManager du bundle
		$userManager = $this->get('fos_user.user_manager');
		 
		// Pour charger un utilisateur
		$user = $userManager->findUserBy(array('username' => $username));
		$formBuilder = $this->createFormBuilder($user);
		$formBuilder->add('username','text')
					->add('email','email')
					->add('enabled','radio');
					
		$form = $formBuilder->getForm();
		
		// On récupère la requête
		$request = $this->get('request');
 
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $minorite contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
	 
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $minorite dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->flush();
	 
				// On redirige vers la page de visualisation de l'minorite nouvellement créé
				return $this->redirect($this->generateUrl('xenopedia_admin_user_manager'));
			}
		}
 
	// À ce stade :
	// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
	// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
		return $this->render('XenopediaAdminBundle:Management:userEditManagement.html.twig',array('form' => $form->createView()));
	}
	
	public function grantAdminRightAction($username)
	{
		$userManager = $this->get('fos_user.user_manager');
		
		$user = $userManager->findUserBy(array('username' => $username));
		
		$user->addRole("ROLE_ADMIN");
		
		$em = $this->getDoctrine()->getManager();
		$em->flush();
		
		return $this->Redirect($this->getRequest()->headers->get('referer'));
	}
}

