<?php

use Model\Connect;

    public function detActor($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM acteur WHERE id_acteur = :id");
        $requete->execute(["id" => $id]);
        require "view/acteur/detailActeur.php"    
    }