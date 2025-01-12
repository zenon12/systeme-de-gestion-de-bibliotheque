<?php
   
   class dataLayer{
       private $connexion ;

       function __construct(){
        try {
            //code...
            $this->connexion = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD) ;
        } catch (PDOException $th) {
            return $th->getMessage() ;
        }
       }

                   //__les fonctions de manipulation de la table livre 

       /**
        * fonction pour ajouter un livre dans la base de donnée
        * @param title  le titre du livre
        * @param name_author  le nom de l'auteur
        * @param genre  le genre du livre
        * @param publication_year  l'année de publication
        * @param ISBN  l'identifiant ISBN
        * @param stock  le stock de ce livre
        * @param description  la description du livre
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

       function  addBook($title,$name_author,$genre,$publication_year,$ISBN,$stock,$description){
           $sql="INSERT INTO books (`title`, `name_author`, `genre`, `publication_year`, `ISBN`, `stock`, `description`)
            VALUES (:title,:name_author,:genre,:publication_year,:ISBN,:stock,:description)" ;

            try {
                $result=$this->connexion->prepare($sql) ;
                $var=$result->execute(array(
                 ':title'=>$title ,
                 ':name_author'=>$name_author ,
                 ':genre'=>$genre ,
                 ':publication_year'=>$publication_year ,
                 ':ISBN'=>$ISBN ,
                 ':stock'=>$stock ,
                 ':description'=>$description 
                )) ;
                if ($var) {
                    //retourner TRUE si l'execution est reussie
                    return TRUE ;
                }
                //retourner False si l'execution n'est pas reussie
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
       }

       /**
        * fonction pour recuperer un livre dans la base de donnée
        * @param id  l'identifiant du livre
        * @param name_author  le nom de l'auteur
        * @param title  le titre du livre
        * @param genre  le genre du livre
        * @return books si l'execution est reussie.
        * @return FALSE si l'execution a echouée.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function getBooks($id=NULL,$name_author=NULL,$title=NULL,$genre=NULL){
            $sql="SELECT * FROM books " ;
            $arr=array() ;
            try {
                if (!is_null($id)) {
                    $sql.="WHERE id=:id" ;
                    $arr[":id"]=$id ;
                }
                if (!is_null($name_author)) {
                    $sql.="WHERE name_author=:name_author" ;
                    $arr[":name_author"]=$name_author ;
                }
                if (!is_null($title)) {
                    $sql.="WHERE title=:title" ;
                    $arr[":title"]=$title ;
                }
                if (!is_null($genre)) {
                    $sql.="WHERE genre=:genre" ;
                    $arr[":genre"]=$genre ;
                }
                $result=$this->connexion->prepare($sql) ;
                $result->execute($arr) ;
                $books=$result->fetchAll(PDO::FETCH_ASSOC) ;
                if ($books) {
                    return $books ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }

       /**
        * fonction pour mettre à jour  un livre dans la base de donnée
        * @param id  l'identifiant'du livre
        * @param name_author  le nom de l'auteur
        * @param stock  le stock de ce livre
        * @param quantity_loan  le nombre de livre emprunter
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function upDateBook($id,$stock,$quantity_loan=NULL){
            $sql="UPDATE books SET stock=$stock, " ;
            try {
                if (!is_null($quantity_loan)) {
                    $sql.="quantity_loan=".$quantity_loan ;
                }
                // print_r($sql) ; exit() ;
                $sql.=" WHERE id=:id" ;
                $result=$this->connexion->prepare($sql) ;
                $var=$result->execute(array(":id"=>$id)) ;
                if ($var) {
                    return TRUE ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }

       /**
        * fonction pour supprimer  un livre dans la base de donnée
        * @param id  l'identifiant du livre
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function deleteBook($id){
            $sql="DELETE FROM books WHERE id:id" ;
            try {
                $result=$connexion->prepare($sql) ;
                $var=$result->execute(array(":id"=>$id)) ;
                if ($var) {
                    return TRUE ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }




                 // __les fonctions de manipulation de la table utilisateur

        
        /**
        * fonction pour ajouter un utilisateur dans la base de donnée
        * @param firstname  le prenom de l'utilisateur
        * @param lastname  le nom de l'utilisateur'
        * @param email l'adresse email de l'utilisateur 
        * @param adresse  le domicile de l'utilisateur
        * @param user_status  le role de l'utilisateur
        * @param password  le mot de passe de l'utlisateur
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

       function  addUser($firstname,$lastname,$email,$adresse,$user_status,$password){
         $sql="INSERT INTO `users`(`firstname`, `lastname`, `email`, `adresse`,`user_status`, `password`) 
               VALUES (:firstname, :lastname, :email, :adresse,:user_status, :password) " ;

         try {
             $result=$this->connexion->prepare($sql) ;
             $var=$result->execute(array(
              ':firstname'=>$firstname ,
              ':lastname'=>$lastname ,
              ':email'=>$email ,
              ':adresse'=>$adresse, 
              ':user_status'=>$user_status ,
              ':password'=>sha1($password)
             )) ;
             if ($var) {
                 //retourner TRUE si l'execution est reussie
                 return TRUE ;
             }
             //retourner False si l'execution n'est pas reussie
             return FALSE ;
         } catch (PDOException $th) {
             return NULL ;
        }
       }


       /**
        * fonction pour recuperer un utilisateur dans la base de donnée
        * @param id  l'identifiant de l'utilisateur
        * @param email l'adresse email de l'utilisateur 
        * @return user si l'execution est reussie.
        * @return FALSE si l'execution a echouée.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function getUser($id=null,$email=null){
            $sql="SELECT * FROM users " ;
            $arr=array() ;
            try {
                if (!is_null($id)) {
                    $sql.="WHERE id=:id" ;
                    $arr[":id"]=$id ;
                }
                if (!is_null($email)) {
                    $sql.="WHERE email=:email" ;
                    $arr[":email"]=$email ;
                }
                $result=$this->connexion->prepare($sql) ;
                $result->execute($arr) ;
                $user=$result->fetch(PDO::FETCH_ASSOC) ;
                if ($user) {
                    return $user ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }



       /**
        * fonction pour supprimer  un utilisateur dans la base de donnée
        * @param id  l'identifiant de l'utilisateur
        * @return FALSE si l'execution a echouée.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function deleteUser($id){
            $sql="DELETE FROM users WHERE id:id" ;
            try {
                $result=$connexion->prepare($sql) ;
                $var=$result->execute(array(":id"=>$id)) ;
                if ($var) {
                    return TRUE ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }




                   // __les fonctions de manipulation de la table emprunter
        

         /**
        *cette fonction permet à l'utilisateur de faire un prêt dans la base de donnée
        * @param id_book  l'identifiant du livre emprunter
        * @param id_user  l'identifiant de l'utilisateur
        * @param loan_date  la date de prêt
        * @param due_date  la date de retour du prêt
        * @param loan_status  l'etat de prêt(exemple: en cours, expiré, retourner)
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

       function  addLoan($id_book,$id_user,$loan_date,$due_date,$loan_status){
        $sql="INSERT INTO `handle_loan`(`id_book`, `id_user`, `loan_date`, `due_date`, `loan_status`)
         VALUES (:id_book, :id_user, :loan_date, :due_date, :loan_status) " ;

        try {
            $result=$this->connexion->prepare($sql) ;
            $var=$result->execute(array(
             ':id_book'=>$id_book ,
             ':id_user'=>$id_user ,
             ':loan_date'=>$loan_date ,
             ':due_date'=>$due_date ,
             ':loan_status'=>$loan_status 
            )) ;
            if ($var) {
                //retourner TRUE si l'execution est reussie
                return TRUE ;
            }
            //retourner False si l'execution n'est pas reussie
            return FALSE ;
        } catch (PDOException $th) {
            return NULL ;
       }
      }


      /**
       * fonction pour recuperer le prêt d'un utilisateur dans la base de donnée
        * @param id  l'identifiant du prêt 
        * @param id_user  l'identifiant de l'utilisateur
        * @return loan retourne les prêts de l'utlisateur si l'execution est reussie.
        * @return FALSE si l'execution a echouée.
        * @return NULL s'il y a une exception PDO declenchée
       */

       function getLoan($id=null,$id_user=null){
           $sql="SELECT * FROM handle_loan " ;
           $arr=array() ;
           try {
               if (!is_null($id)) {
                   $sql.="WHERE id=:id" ;
                   $arr[":id"]=$id ;
               }
               if (!is_null($id_user)) {
                   $sql.="WHERE id_user=:id_user" ;
                   $arr[":id_user"]=$id_user ;
               }
               $result=$this->connexion->prepare($sql) ;
               $result->execute($arr) ;
               $loan=$result->fetchAll(PDO::FETCH_ASSOC) ;
               if ($loan) {
                   return $loan ;
               }
               return FALSE ;
           } catch (PDOException $th) {
               return NULL ;
           }
       }



       /**
        * fonction pour supprimer  un utilisateur dans la base de donnée
        * @param id  l'identifiant du prêt 
        * @return TRUE si l'execution est reussie, sinon FALSE.
        * @return NULL s'il y a une exception PDO declenchée
        */

        function deleteLoan($id){
            $sql="DELETE FROM handle_loan WHERE id=:id" ;
            try {
                $result=$this->connexion->prepare($sql) ;
                $var=$result->execute(array(":id"=>$id)) ;
                if ($var) {
                    return TRUE ;
                }
                return FALSE ;
            } catch (PDOException $th) {
                return NULL ;
            }
        }
        











    }
?>
 