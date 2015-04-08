<?php
// src/Xe,pêdoa/UserBundle/Entity/User.php
 
namespace Xenopedia\UserBundle\Entity;
 
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  //LIEN VERS LES AUTRES ENTITES
  
  //CLICHES
  
  	/**
	* @ORM\OneToMany(targetEntity="Xenopedia\SiteBundle\Entity\cliche",mappedBy="auteur",cascade="remove")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $cliches;
	
	public function addCliche(\Xenopedia\SiteBundle\Entity\cliche $cliche)
	{
		$this->cliches[] = $cliche;
		return $this;
	}
	 
	public function removeCliche(\Xenopedia\SiteBundle\Entity\cliche $cliche)
	{
		$this->cliches->removeElement($cliche);
	}
	 
	public function getCliche()
	{
		return $this->cliches;
	}
	
	 /**
	* @ORM\ManyToMany(targetEntity="Xenopedia\SiteBundle\Entity\cliche",cascade="remove")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $votes;
	
	public function addVote(\Xenopedia\SiteBundle\Entity\cliche $cliche)
	{
		$this->votes[] = $cliche;
		return $this;
	}
	 
	public function removeVote(\Xenopedia\SiteBundle\Entity\cliche $cliche)
	{
		$this->votes->removeElement($cliche);
	}
	 
	public function getVotes()
	{
		return $this->votes;
	}
	public function setVotes(\Doctrine\Common\Collections\ArrayCollection $collection)
	{
		$this->votes = $collection;
	}
	
	// @Throw Exception Si le cliché est déja présent dans $votes
	public function getAVoterPour(\Xenopedia\SiteBundle\Entity\cliche $clicheVote)
	{
		//foreach($this->getVotes() as $cliche)
		//{
			/*if(($cliche->getId())==($clicheVote->getId()))
			{
				return $UserAVote = true;
				
			}*/
		//}
		//return false;
	}
	
	public function aVoterCliche($idCliche)
	{
		foreach($votes as $cliche)
		{
			echo $cliche->getContenu();
			if($cliche->getId()==$idCliche)
			{
				return true;
			}
		}
		
		return false;
	}
		/**
	* @var string
	  @ORM\Column(name="urlGravatar",type="string",nullable=true)
	  @Assert\Email
	 */
	private $urlGravatar;
	
	public function getUrlGravatar()
	{
		return $this->urlGravatar;
	}
	
	public function setUrlGravatar($email)
	{
			$this->urlGravatar = $email;
	}
	
	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="dateAjout", type="date")
	 */
	private $dateAjout;
	
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
	
	
	public function __construct()
	{
		parent::__construct();
		$this->dateAjout = new \DateTime('now');
		$this->cliches = new \Doctrine\Common\Collections\ArrayCollection();
		$this->votes = new \Doctrine\Common\Collections\ArrayCollection();
		$this->roles[] = "ROLE_USER";
	}
}