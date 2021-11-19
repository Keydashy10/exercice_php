<?php 

if(!empty($_POST)){

        if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['quantity']) && !
            empty($_POST['description'])) {

                //echo "<pre style='position: relative;left: 500px; top: 70px; z-index: 19000; '>";
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
     }

}




?>
