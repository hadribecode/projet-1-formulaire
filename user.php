<?php

$options = array(
    'nom'           => FILTER_SANITIZE_STRING,
    'prenom'        => FILTER_SANITIZE_STRING,
    'email'         => FILTER_VALIDATE_EMAIL,
    'telephone'     => FILTER_VALIDATE_NUMBER,
    'sujets'        => FILTER_SANITIZE_NUMBER_INT,
    'pays'          => FILTER_SANITIZE_NUMBER_INT,
    'genre'         => FILTER_SANITIZE_NUMBER_INT,
    'message'       => FILTER_SANITIZE_STRING
);
    

    $result = filter_input_array(INPUT_POST, $options);  

    if ($result != null AND $result != FALSE) {

        echo "Logiquement, les données doivent s'afficher!!".'<br>';
    
    } else {
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }

    foreach($result as $key => $value) 
    {
       $result[$key]=trim($result[$key]);
    }

    if ($result['genre'] == 1){
        $result["genre"] = "homme";
    }
    else if ($result["genre"] == 2) {
        $result["genre"] = "femme";
    }
    else {
        $result["genre"] = "Error";
    }

    if ($result["pays"] == 1) {
        $result["pays"] = "Belgique";
    }
    else if ($result["pays"] == 2) {
        $result["pays"] = "France";
    }
    else if ($result["pays"] == 3) {
        $result["pays"] = "Luxembourg";
    }
    else if ($result["pays"] == 4) {
        $result["pays"] = "Allemagne";
    }
    else {
        $result["pays"] = "Error";
    }


    echo $result['nom'];
    echo '<br>';
    echo $result['prenom'];
    echo '<br>';
    echo $result['email'];
    echo '<br>';
    echo $result['telephone'];
    echo '<br>';
    echo $result['sujets'];
    echo '<br>';
    echo $result['pays'];
    echo '<br>';
    echo $result['genre'];
    echo '<br>';
    echo $result['message'];
    echo '<br>';


    if(!empty($_POST['checklist'])) {
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['checklist'] as $selected) { //$selected = key
            if ($selected == 1) {
                echo "wouaw quel sujet". '<br>';
            }
            else if ($selected == 2) {
                echo "sujet sympa".'<br>';
            }
            else if ($selected == 3) {
                echo "beau sujet". '<br>';
            }
            else if ($selected == 4) {
                echo "t'as encore beaucoup de sujets". '<br>';
            }
            else if ($selected == 5) {
                echo "jamais entendu parler de ce sujet". '<br>';
        }

        }
    }else{
        echo "Autres";
    }








/*
if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['email']) AND isset($_GET['telephone']) )

{

    
	echo  $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . $_GET['email'] . $_GET['telephone'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}
*/
?>