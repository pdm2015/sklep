<?php

namespace SklepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Film
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
     * @ORM\Column(name="tytul", type="string", length=255)
     */
    private $tytul;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="text")
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="decimal")
     */
    private $cena;

    /**
     * @var string
     *
     * @ORM\Column(name="aktorzy", type="string", length=255)
     */
    private $aktorzy;


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
     * Set tytul
     *
     * @param string $tytul
     * @return Film
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return Film
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return Film
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return string 
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set aktorzy
     *
     * @param string $aktorzy
     * @return Film
     */
    public function setAktorzy($aktorzy)
    {
        $this->aktorzy = $aktorzy;

        return $this;
    }

    /**
     * Get aktorzy
     *
     * @return string 
     */
    public function getAktorzy()
    {
        return $this->aktorzy;
    }
}
