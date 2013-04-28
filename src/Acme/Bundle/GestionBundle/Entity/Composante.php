<?php

namespace Acme\Bundle\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\GestionBundle\Entity\ComposanteRepository")
 */
class Composante
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
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=100)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=100)
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="cout", type="string", length=100)
     */
    private $cout;


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
     * Set titre
     *
     * @param string $titre
     * @return Composante
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Composante
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Composante
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    
        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set license
     *
     * @param string $license
     * @return Composante
     */
    public function setLicense($license)
    {
        $this->license = $license;
    
        return $this;
    }

    /**
     * Get license
     *
     * @return string 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set cout
     *
     * @param string $cout
     * @return Composante
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    
        return $this;
    }

    /**
     * Get cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->cout;
    }
}
