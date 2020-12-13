<?php

class userClass
{
    /* User Login */
    public function userLogin($usernameEmail, $password)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT id FROM users WHERE username='$usernameEmail'and upassword='$password'");
            $stmt->bindParam("usernameEmail", $usernameEmail, PDO::PARAM_STR) ;
            $stmt->bindParam("upassword", $password, PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if ($count) {
                $_SESSION['id']=$data->id; // Storing user session value
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

    /* User Registration */
    public function userRegistration($username, $Nom, $Prenom, $password)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO users(username, Nom, Prenom, upassword) VALUES ('$username', '$Nom', '$Prenom', '$password')");
            $stmt->bindParam("username", $username, PDO::PARAM_STR) ;
            $stmt->bindParam("Nom", $Nom, PDO::PARAM_STR) ;
            $stmt->bindParam("Prenom", $Prenom, PDO::PARAM_STR) ;
            $stmt->bindParam("upassword", $password, PDO::PARAM_STR) ;
            $stmt->execute();

            $id=$db->lastInsertId(); // Last inserted row id
            $db = null;
            $_SESSION['id']=$id;
            return true;
        } catch (PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

    /* User Details */
    public function userDetails($id)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT username, Nom, Prenom FROM users WHERE id=$id");
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->bindParam("Nom", $Nom, PDO::PARAM_INT);
            $stmt->bindParam("username", $username, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

     /* Article Details */
     public function ArticleDetails($id)
     {
         try {
             
             $db = getDB();
             $stmt = $db->prepare("SELECT NomArticle, PrixArticle, DescriptionArticle, TypeArticle FROM users, articles Where articles.idUser = users.id");
             $stmt->bindParam("id", $id, PDO::PARAM_INT);
             $stmt->bindParam("NomArticle", $NomArticle, PDO::PARAM_STR);
             $stmt->bindParam("PrixArticle", $PrixArticle, PDO::PARAM_INT);
             $stmt->bindParam("DescriptionArticle", $DescriptionArticle, PDO::PARAM_STR);
             $stmt->bindParam("TypeArticle", $TypeArticle, PDO::PARAM_STR);
             $stmt->execute();
             $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
             return $data;
         } catch (PDOException $e) {
             echo '{"error":{"text":'. $e->getMessage() .'}}';
         }
     }


    
}
?>