<?php
class Personne
{
    // Properties
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private genre $genre;
    private string $lieuNaissance;
    private string $nationalite;
    private string $fonction;

    // Construct
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, genre $genre, string $lieuNaissance, string $nationalite, string $fonction)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->genre = $genre;
        $this->lieuNaissance = $lieuNaissance;
        $this->nationalite = $nationalite;
        $this->nationalite = $fonction;
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
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
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

    // Get and Set fonction
    public function getFonction()
    {
        return $this->fonction;
    }
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    // Methode calcul age
    public function getAge()
    {
        return date_diff(new DateTime(), $this->dateNaissance)->format("%Y"); // différence(dateActuelle, dateNaissance)->formatée(années).
    }

    public function __toString()
    {   // Methode pour afficher les informations en lettres       
        return $this->nom . " " . $this->prenom;
    }
}
