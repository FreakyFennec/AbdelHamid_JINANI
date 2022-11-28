<?php
class Equipe
{
    // Properties
    private string $nom;
    private Pays $pays;
    private array $carrieres;

    // Construct
    public function __construct(string $nom, Pays $pays)
    {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->carrieres = [];
    }

    // Get and Set noms
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // Get and Set pays
    public function getPays()
    {
        return $this->pays;
    }
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    public function __toString()
    {
        return $this->nom . " (" . $this->pays . ")";
    }

    // Methode affiche infos Equipe
    public function afficheInfosEquipe()
    {
        return "
                <h3>Infos equipe</h3>
                <p>$this</p>";
    }
}
