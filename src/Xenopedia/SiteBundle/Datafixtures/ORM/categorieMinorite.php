<?php
// src/Sdz/BlogBundle/DataFixtures/ORM/categoriesMinorite.php
 
namespace Xenopedia\SiteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Xenopedia\SiteBundle\Entity\categorieMinorite;
 
class CategoriesMinorite implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array('Regionalisme', 'Mode de vie', 'Mode de pensée', 'Couleur de peau','Classe sociale');
 
    foreach($noms as $i => $nom)
    {
      // On crée la catégorie
      $liste_categories[$i] = new CategorieMinorite();
      $liste_categories[$i]->setNom($nom);
 
      // On la persiste
      $manager->persist($liste_categories[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
  }
}