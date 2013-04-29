<?php

namespace Acme\Bundle\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * version
 */
class version
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomv;


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
     * Set nomv
     *
     * @param string $nomv
     * @return version
     */
    public function setNomv($nomv)
    {
        $this->nomv = $nomv;
    
        return $this;
    }

    /**
     * Get nomv
     *
     * @return string 
     */
    public function getNomv()
    {
        return $this->nomv;
    }
}
