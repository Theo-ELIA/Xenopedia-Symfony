<?php
// src/Sdz/BlogBundle/DataFixtures/ORM/user.php
 
namespace Xenopedia\SiteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Xenopedia\UserBundle\Entity\User;
 
class UserFixture implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
	$users = array(
					array('User',sha1('userpass'),'user@user.fr'),
					array('Admin',sha1('adminpass'),'admin@admin'));
 
    foreach($users as $i => $user)
    {
      // On crée la catégorie
      $liste_user[$i] = new User();
      $liste_user[$i]->setUsername($user[0]);
	  $liste_user[$i]->setPassword($user[1]);
	  $liste_user[$i]->setEmail($user[2]);
 
      // On la persiste
      $manager->persist($liste_user[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
  }
}