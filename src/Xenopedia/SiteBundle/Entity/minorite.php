<?php

namespace Xenopedia\SiteBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * minorite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xenopedia\SiteBundle\Entity\minoriteRepository")
 * @UniqueEntity(fields="nom", message="Cette minorité existe déja")
 */
class minorite
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
	 * @var \DateTime
	 *
	 * @ORM\Column(name="dateAjout", type="date")
	 */
	private $dateAjout;

	
	/**
	* @var string
	*
	* @ORM\Column(name="urlImage",type="string",nullable=true)
	* @Assert\Url
	*/
	private $urlImage;
	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId()
	{
		return $this->id;
	}

	//Ne fait rien permet l'ajout d'un champ caché pour la modif
	public function setId()
	 {
	 
	 }
	 
	/**
	 * Set nom
	 *
	 * @param string $nom
	 * @return minorite
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
	 * Set Url image
	 *
	 * @param string $url
	 * @return minorite
	 */
	public function setUrlImage($url)
	{
		$this->urlImage = $url;

		return $this;
	}

	/**
	 * Get Url Image
	 *
	 * @return string 
	 */
	public function getUrlImage()
	{
		return $this->urlImage;
	}
	/**
	 * Set dateAjout
	 *
	 * @param \DateTime $dateAjout
	 * @return minorite
	 */
	public function setDateAjout($dateAjout)
	{
		$this->dateAjout = $dateAjout;

		return $this;
	}

	/**
	 * Get dateAjout
	 *
	 * @return \DateTime 
	 */
	public function getDateAjout()
	{
		return $this->dateAjout;
	}
	
	//ENTITES
	
	//Cliches | Cliches
	/**
	* @ORM\OneToMany(targetEntity="Xenopedia\SiteBundle\Entity\cliche",mappedBy="minorite")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $cliches;

	/**
	* Get Minorite
	*
	* @return Xenopedia\SiteBundle\Entity\cliche 
	*/
	public function getCliches()
	{
		return $this->cliches;
	}
	
	/*
	* Set cliches
	*
	* @param Xenopedia\SiteBundle\Entity\cliche $cliches
	*/
	public function setCliches(\Doctrine\Common\Collections\ArrayCollection $cliche)
	{
		$this->cliches = $cliche;
	}

	//FIN CLICHES


	//Categories | CategorieMinorite
	/**
	* @ORM\ManyToMany(targetEntity="Xenopedia\SiteBundle\Entity\categorieMinorite",mappedBy="minorites", cascade={"persist"})
	**/
	private $categories;

	/**
		* Get categories
		*
		* @return Doctrine\Common\Collections\Collection
	*/
	public function getCategories() // Notez le « s », on récupère une liste de catégories ici !
	{
		return $this->categories;
	}

	public function setCategories(\Doctrine\Common\Collections\ArrayCollection $categories)
	{
		$this->categories($categories);
	}
	
	public function addCategorie($categorie)
	{
		$this->categories->add($categorie);
	}
 

	//FIN CATEGORIES

	//FIN ENTITIE

	//CONSTRUCTEUR
	public function __construct()
	{
		// Si vous aviez déjà un constructeur, ajoutez juste cette ligne :
		$this->categories = new \Doctrine\Common\Collections\ArrayCollection();
		$this->cliches = new \Doctrine\Common\Collections\ArrayCollection();
		$this->dateAjout = new \DateTime('now');
		
	}
}
