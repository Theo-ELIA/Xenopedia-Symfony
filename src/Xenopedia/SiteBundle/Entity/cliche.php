<?php

namespace Xenopedia\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Cliche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xenopedia\SiteBundle\Entity\ClicheRepository")
 * @UniqueEntity(fields="contenu", message="Ce cliché existe déja")
 */
class cliche
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
	 * @ORM\Column(name="contenu", type="text")
	 
	
	@Assert\MinLength(limit=10,message="Le cliché doit faire au moins {{limit}} caractères")
	@Assert\MaxLength(limit=300,message="Le cliché doit faire au maximum {{limit}} caractère")
	*/
	private $contenu;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="vote", type="integer")
	 */
	private $vote;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="dateAjout", type="date")
	 */
	private $dateAjout;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="valide", type="boolean")
	 */
	private $valide;


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
	 * Set contenu
	 *
	 * @param string $contenu
	 * @return Cliche
	 */

	public function setContenu($contenu)
	{
		$this->contenu = $contenu;

		return $this;
	}

	/**
	 * Get contenu
	 *
	 * @return string 
	 */
	public function getContenu()
	{
		return $this->contenu;
	}

	/**
	 * Set vote
	 *
	 * @param integer $vote
	 * @return Cliche
	 */
	public function setVote($vote)
	{
		$this->vote = $vote;

		return $this;
	}

	/**
	 * Get vote
	 *
	 * @return integer 
	 */
	public function getVote()
	{
		return $this->vote;
	}
	
	public function voter()
	{
		return $this->vote++;
	}
	/**
	 * Set dateAjout
	 *
	 * @param \DateTime $dateAjout
	 * @return Cliche
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

	/**
	 * Set valide
	 *
	 * @param boolean $valide
	 * @return Cliche
	 */
	public function setValide($valide)
	{
		$this->valide = $valide;

		return $this;
	}

	/**
	 * Get valide
	 *
	 * @return boolean 
	 */
	public function getValide()
	{
		return $this->valide;
	}
	
	//ENTITES
	
	//AUTEUR | User
	
	
	/**
	* @ORM\ManyToOne(targetEntity="Xenopedia\UserBundle\Entity\User",inversedBy="cliches")
	* @ORM\JoinColumn(nullable=false)
	*/
	//@Assert\Valid()
	private $auteur;
	
	
	 /**
	* Set auteur
	*
	* @param Xenopedia\SiteBundle\Entity\User $auteur
	*/
	public function setAuteur(\Xenopedia\UserBundle\Entity\User $auteur)
	{
		$this->auteur = $auteur;
	}
	 
	/**
	* Get auteur
	*
	* @return Xenopedia\SiteBundle\Entity\User 
	*/
	public function getAuteur()
	{
		return $this->auteur;
	}
	
	//FIN AUTEUR
	
	
	//Minorite | Minorite
	
	/**
	* @ORM\ManyToOne(targetEntity="Xenopedia\SiteBundle\Entity\minorite",inversedBy="cliches")
	* @ORM\JoinColumn(nullable=false)
	*/
	//@Assert\Valid()
	private $minorite;
	
	/**
	* Set Minorite
	*
	* @param Xenopedia\SiteBundle\Entity\minorite $minorite
	*/
	public function setMinorite(\Xenopedia\SiteBundle\Entity\minorite $minorite)
	{
		$this->minorite = $minorite;
	}
	 
	/**
	* Get Minorite
	*
	* @return Xenopedia\SiteBundle\Entity\minorite 
	*/
	public function getMinorite()
	{
		return $this->minorite;
	}
	
	//FIN MINORITE
	
	
	
	
	//FIN ENTITES
	//CONSTRUCTEUR
  public function __construct()
  {
	$this->dateAjout = new \DateTime('now'); // Par défaut, la date de l'auteur est la date d'aujourd'hui
	$this->valide = false;
	$this->vote = 0;
  }
}
