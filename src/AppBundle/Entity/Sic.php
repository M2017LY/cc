<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sic
 *
 * @ORM\Table(name="sic")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SicRepository")
 */
class Sic
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
     * @ORM\Column(name="sic", type="string", length=10)
     */
    private $sic;

    /**
     * @var string
     *
     * @ORM\Column(name="ditail", type="string", length=255)
     */
    private $ditail;

    /**
     * @var int
     *
     * @ORM\Column(name="company", type="integer")
     */
    private $company;


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
     * Set sic
     *
     * @param string $sic
     *
     * @return Sic
     */
    public function setSic($sic)
    {
        $this->sic = $sic;

        return $this;
    }

    /**
     * Get sic
     *
     * @return string
     */
    public function getSic()
    {
        return $this->sic;
    }

    /**
     * Set ditail
     *
     * @param string $ditail
     *
     * @return Sic
     */
    public function setDitail($ditail)
    {
        $this->ditail = $ditail;

        return $this;
    }

    /**
     * Get ditail
     *
     * @return string
     */
    public function getDitail()
    {
        return $this->ditail;
    }

    /**
     * Set company
     *
     * @param integer $company
     *
     * @return Sic
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->company;
    }
}
