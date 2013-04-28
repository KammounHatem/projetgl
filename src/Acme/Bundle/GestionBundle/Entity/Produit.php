<?php

namespace Acme\Bundle\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\GestionBundle\Entity\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="client", type="string", length=100)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="liste", type="string", length=255)
     */
    private $liste;


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
     * @return Produit
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
     * Set client
     *
     * @param string $client
     * @return Produit
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Produit
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
     * Set etat
     *
     * @param string $etat
     * @return Produit
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set liste
     *
     * @param string $liste
     * @return Produit
     */
    public function setListe($liste)
    {
        $this->liste = $liste;
    
        return $this;
    }

    /**
     * Get liste
     *
     * @return string 
     */
    public function getListe()
    {
        return $this->liste;
    }
}
