<?php
    include "../config/config.php" ;
    include "../model/dataLayer.class.php" ;

    define("ROOT",dirname(dirname($_SERVER["SCRIPT_NAME"]))) ;
    define("SP",DIRECTORY_SEPARATOR) ;

    session_start() ;
    

    $model=new dataLayer() ;
    //print_r($connexion) ;
    // $title="S'ouvrir à l'amour et au bonheur" ;
    // $name_author="Don Miguel Ruiz" ;
    // $genre="Developpement Personnel" ;
    // $publication_year="2003" ;
    // $isbn="23"; 
    // $stock="15" ;
    // $description="Lorem Ipsum is simply dummy text of the printing and typesetting 
    // industry." ;
    // $var=$dataBase->addBook($title,$name_author,$genre,$publication_year,$isbn,$stock,$description) ;
    // print_r($var) ;

    //test de la fonction getBooks
    // $books=$model->getBooks(NULL,NULL,NULL,"fiction") ;
    // print_r($books) ; exit() ;

    include "function.php" ;

    // $result=rechercher("les etoiles") ;
    // die($result) ;
    
?>