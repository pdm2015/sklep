<?php

namespace SklepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zakup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Zakup
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
     * @var integer
     *
     * @ORM\Column(name="film_id", type="integer")
     */
    private $filmId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kiedy", type="datetime")
     */
    private $kiedy;


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
     * Set filmId
     *
     * @param integer $filmId
     * @return Zakup
     */
    public function setFilmId($filmId)
    {
        $this->filmId = $filmId;

        return $this;
    }

    /**
     * Get filmId
     *
     * @return integer 
     */
    public function getFilmId()
    {
        return $this->filmId;
    }

    /**
     * Set kiedy
     *
     * @param \DateTime $kiedy
     * @return Zakup
     */
    public function setKiedy($kiedy)
    {
        $this->kiedy = $kiedy;

        return $this;
    }

    /**
     * Get kiedy
     *
     * @return \DateTime 
     */
    public function getKiedy()
    {
        return $this->kiedy;
    }
}
