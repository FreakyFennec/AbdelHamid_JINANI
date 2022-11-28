<?php
class Joueur
{
    // Properties
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateNaissance;
    protected string $genre;
    protected string $lieuNaissance;
    protected Pays $nationalite;

    // Constructor
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $genre, string $lieuNaissance, Pays $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->genre = $genre;
        $this->lieuNaissance = $lieuNaissance;
        $this->nationalite = $nationalite;
    }

    // Get and Set nom
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // Get and Set prenom
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    // Get and Set dateNaissance
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance;
        return $this;
    }

    // Get and Set genre
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    // Get and Set lieuNaissance
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;
    }

    // Get and Set nationalite
    public function getNationalite()
    {
        return $this->nationalite;
    }
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    // Methode calcul age
    public function getAge()
    {
        return date_diff(new DateTime(), $this->dateNaissance)->format("%Y"); // différence(dateActuelle, dateNaissance)->formatée(années).
    }

    public function __toString()
    {   // Methode pour afficher les informations en lettres       
        return $this->nom . "<br>" . $this->prenom . "<br>" . $this->getAge() . "<br>" . $this->genre . "<br>" . $this->lieuNaissance . "<br>" . $this->nationalite . "<br>";
    }
}
