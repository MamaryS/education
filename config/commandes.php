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
  
  function modifier($image, $nom, $niveau, $id)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("UPDATE etablissements SET `image` = ?, nom = ?, niveau = ? WHERE id=?");
  
      $req->execute(array($image, $nom, $niveau, $id));
  
      $req->closeCursor();
    }
  }
  
  function afficherUnetablissement($id)
  {
      if(require("connexion.php"))
      {
          $req=$access->prepare("SELECT * FROM etablissements WHERE id=?");
  
          $req->execute(array($id));
  
          $data = $req->fetchAll(PDO::FETCH_OBJ);
  
          return $data;
  
          $req->closeCursor();
      }
  }





    function ajouter($image, $nom, $niveau)
  {
    if (require("connexion.php")) 
    {
        $req= $access->prepare("INSERT INTO 	etablissements (image, nom, niveau) VALUES (?, ?, ?)");
        $req->execute(array($image, $nom, $niveau));
        $req->closeCursor();
    }
  }

    function afficher()
    {
        if (require("connexion.php")) 
        {
            $req=$access->prepare("SELECT * FROM 	etablissements ORDER BY id DESC");
            $req->execute();
            $data= $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
            $req->closeCursor();
        }
    }

    function supprimer($id)
    {
        if (require("connexion.php")) 
        {
            $req= $access->prepare("DELETE  FROM	etablissements WHERE id=?");
            $req->execute(array($id));
        }
        
    }

    function getAdmin($email, $password)
    {
  
    if(require("connexion.php"))
    {
  
      $req = $access->prepare("SELECT * FROM admin WHERE id=1");
  
      $req->execute();
  
      if($req->rowCount() == 1)
      {
        
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