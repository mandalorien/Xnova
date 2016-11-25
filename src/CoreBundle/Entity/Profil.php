<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProfilRepository")
 */
class Profil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="idfacebook", type="string", length=60, nullable=true)
     */
    private $idfacebook;

    /**
     * @var int
     *
     * @ORM\Column(name="ipregister", type="string",length=12)
     */

    private $ipRegister;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="text", nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text", nullable=true)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime")
     */
    private $registerDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;

	/**
	 * @var users
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Users", cascade={"persist"})
     */
    private $users;
	

    /**
	 * @var univers
     * @ORM\ManyToMany(targetEntity="GameBundle\Entity\Univers")
     */
    private $univers;
	
	public function __construct()
	{
		$this->registerDate = new \Datetime();
		$this->updateDate = new \Datetime();
		$this->univers = new ArrayCollection();
	}

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idfacebook
     *
     * @param string $idfacebook
     *
     * @return Profil
     */
    public function setIdfacebook($idfacebook)
    {
        $this->idfacebook = $idfacebook;

        return $this;
    }

    /**
     * Get idfacebook
     *
     * @return string
     */
    public function getIdfacebook()
    {
        return $this->idfacebook;
    }

    /**
     * Set ipRegister
     *
     * @param string $ipRegister
     *
     * @return Profil
     */
    public function setIpRegister($ipRegister)
    {
        $this->ipRegister = $ipRegister;

        return $this;
    }

    /**
     * Get ipRegister
     *
     * @return string
     */
    public function getIpRegister()
    {
        return $this->ipRegister;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Profil
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return Profil
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Profil
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return Profil
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Profil
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set users
     *
     * @param \CoreBundle\Entity\Users $users
     *
     * @return Profil
     */
    public function setUsers(\CoreBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \CoreBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add univer
     *
     * @param \GameBundle\Entity\Univers $univer
     *
     * @return Profil
     */
    public function addUniver(\GameBundle\Entity\Univers $univer)
    {
        $this->univers[] = $univer;

        return $this;
    }

    /**
     * Remove univer
     *
     * @param \GameBundle\Entity\Univers $univer
     */
    public function removeUniver(\GameBundle\Entity\Univers $univer)
    {
        $this->univers->removeElement($univer);
    }

    /**
     * Get univers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUnivers()
    {
        return $this->univers;
    }
}
