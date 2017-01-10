<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use GameBundle\Entity\Univers;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var univers
     * @ORM\ManyToMany(targetEntity="GameBundle\Entity\Univers",cascade={"persist", "merge"})
     */
    protected $univers;

	public function __construct()
    {
        parent::__construct();
        $this->univers = new ArrayCollection();
    }

    /**
     * Add univer
     *
     * @param \GameBundle\Entity\Univers $univer
     *
     * @return Users
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
