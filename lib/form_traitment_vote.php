<?php 

 
if(!empty($_POST)){

    if(!empty($_POST['vote'])){


            $sql_insert_vote = "INSERT INTO comment (id_comment, note, id_article, id_user) VALUES (NULL,'".$_POST["vote"]."','".$_GET['id_article']."',".$_SESSION['id_user'].")";
            echo $sql_insert_vote;

            if(mysqli_query($connexion, $sql_insert_vote)){

                echo "note ajoutée";

            }else{

                echo "Erreur de requete SQL";
            }
        } 
}

?>