<?php
// src/Sdz/BlogBundle/DataFixtures/ORM/minorite.php
 
namespace Xenopedia\SiteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Xenopedia\SiteBundle\Entity\minorite;
 
class Minorites implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array('Bretons', 'Blancs', 'Femmes', 'Américains','Québecois');
 
    foreach($noms as $i => $nom)
    {
      // On crée la catégorie
      $liste_categories[$i] = new Minorite();
      $liste_categories[$i]->setNom($nom);
 
      // On la persiste
      $manager->persist($liste_categories[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
  }
}