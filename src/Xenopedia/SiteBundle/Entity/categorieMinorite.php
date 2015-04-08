<?php

namespace Xenopedia\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categorieMinorite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xenopedia\SiteBundle\Entity\categorieMinoriteRepository")
 */
class categorieMinorite
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nom", type="string", length=255)
	 */
	private $nom;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text",nullable=true)
	 */
	private $description;


	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId()
	{
		return $this->id;
	}
	
	public function setId()
	{
	
	}
	/**
	 * Set nom
	 *
	 * @param string $nom
	 * @return categorieMinorite
	 */
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get nom
	 *
	 * @return string 
	 */
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return categorieMinorite
	 */
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string 
	 */
	public function getDescription()
	{
		return $this->description;
	}
	
	//ENTITIES
	
	//MINORITES
	
	/**
	* @ORM\ManyToMany(targetEntity="Xenopedia\SiteBundle\Entity\minorite", inversedBy="categories", cascade={"persist"})
	* @ORM\JoinTable(name="minorite_categorieminorite")
	*/
	private $minorites; 
	  /**
		* Get categories
		*
		* @return Doctrine\Common\Collections\Collection
	*/
	public function getMinorites() // Notez le « s », on récupère une liste de catégories ici !
	{
		return $this->minorites;
	}
 
 
	//FIN ENTITES
	
	//CONSTRUCTEUR
	public function __construct()
	{
		// Si vous aviez déjà un constructeur, ajoutez juste cette ligne :
		$this->minorites = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	
}
