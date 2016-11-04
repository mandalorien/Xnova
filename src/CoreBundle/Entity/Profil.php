<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="idfacebook", type="string", length=60)
     */
    private $idfacebook;

    /**
     * @var int
     *
     * @ORM\Column(name="univers", type="integer")
     */

    private $ipRegister;

    /**
     * @var array
     *
     * @ORM\Column(name="univer", type="array")
     */
    private $univer;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="text")
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text")
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
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
     * Get id
     *
     * @return int
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
     * Set univer
     *
     * @param array $univer
     *
     * @return Profil
     */
    public function setUniver($univer)
    {
        $this->univer = $univer;

        return $this;
    }

    /**
     * Get univer
     *
     * @return array
     */
    public function getUniver()
    {
        return $this->univer;
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
}

