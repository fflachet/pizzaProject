<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="id_client", type="string", length=255)
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=255)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_paiement", type="string", length=255)
     */
    private $modePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_livreur", type="string", length=255)
     */
    private $nomLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="id_pizza", type="string", length=255)
     */
    private $idPizza;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="adresses_livraison", type="string", length=255)
     */
    private $adressesLivraison;


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
     * Set idClient
     *
     * @param string $idClient
     *
     * @return Commande
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return string
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param string $heure
     *
     * @return Commande
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     *
     * @return Commande
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set nomLivreur
     *
     * @param string $nomLivreur
     *
     * @return Commande
     */
    public function setNomLivreur($nomLivreur)
    {
        $this->nomLivreur = $nomLivreur;

        return $this;
    }

    /**
     * Get nomLivreur
     *
     * @return string
     */
    public function getNomLivreur()
    {
        return $this->nomLivreur;
    }

    /**
     * Set idPizza
     *
     * @param string $idPizza
     *
     * @return Commande
     */
    public function setIdPizza($idPizza)
    {
        $this->idPizza = $idPizza;

        return $this;
    }

    /**
     * Get idPizza
     *
     * @return string
     */
    public function getIdPizza()
    {
        return $this->idPizza;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Commande
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Commande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set adressesLivraison
     *
     * @param string $adressesLivraison
     *
     * @return Commande
     */
    public function setAdressesLivraison($adressesLivraison)
    {
        $this->adressesLivraison = $adressesLivraison;

        return $this;
    }

    /**
     * Get adressesLivraison
     *
     * @return string
     */
    public function getAdressesLivraison()
    {
        return $this->adressesLivraison;
    }
}
