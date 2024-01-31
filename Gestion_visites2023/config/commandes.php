<?php

function ajouterUser($nom, $prenom, $email, $motdepasse)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse));

    return true;

    $req->closeCursor();
  }
}


function modifier($image, $Nom_Medecin, $Prenom_Medecin, $specialiteComplementaire,$date,$Nom_Medicament,$bilan,$Famille_Medicament,$quantite,$id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE rapports SET `image` = ?, `Nom_Medecin` = ?,`Prenom_Medecin` = ?,`specialiteComplementaire` = ?, `date`= ?,`Nom_Medicament` = ?,`bilan`=?, `Famille_Medicament`=?,`quantite`=? WHERE id=?");

    $req->execute(array($image, $Nom_Medecin, $Prenom_Medecin, $specialiteComplementaire,$date,$Nom_Medicament,$bilan,$Famille_Medicament,$quantite, $id));

    $req->closeCursor();
  }
}

function afficherUnrapport($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM rapports WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

  function ajouter($image, $Nom_Medecin, $Prenom_Medecin, $specialiteComplementaire,$date,$Nom_Medicament,$bilan,$Famille_Medicament,$quantite)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO rapports (image, Nom_Medecin,Prenom_Medecin,specialiteComplementaire,date,Nom_Medicament,bilan,Famille_Medicament,quantite) VALUES (?, ?, ?, ?,?,?,?,?,?)");

      $req->execute(array($image, $Nom_Medecin, $Prenom_Medecin, $specialiteComplementaire,$date,$Nom_Medicament,$bilan,$Famille_Medicament,$quantite));

      $req->closeCursor();
    }
  }

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM rapports ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM rapports WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function getvisiteur($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM visiteur WHERE id=1");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>