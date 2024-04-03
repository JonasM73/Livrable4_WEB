<?php
    $user = 'root';                    // Define login and password to connect with DataBase
    $pass = 'cesi';
    try { 
        $db = new PDO('mysql:host=localhost;dbname=projet_web', $user, $pass);     
    }
    catch (PDOException $e) {
        echo "failed";
    }

    $request = $db->prepare("SELECT *  FROM utilisateur ;");

    $request->execute();               
    $datas = $request->fetchAll(PDO::FETCH_ASSOC);  
    var_dump($datas);
    echo '<br>';
    echo '<br>';

    $index = 1 ;
    foreach ($datas as $user){
        var_dump(substr($user['utilisateur_MDP'],0,1) != '$');
        if (substr($user['utilisateur_MDP'],0,1) != '$'){
            $sql = "UPDATE utilisateur
            SET utilisateur_MDP='".password_hash($user['utilisateur_MDP'],PASSWORD_DEFAULT)."'
            WHERE id_utilisateur=".$user['id_utilisateur'];
            echo $sql.'<br>';

            $rslt = $db->query($sql);
            echo 'succesChange id='.$index;
        }
        else {  
            echo 'unchange id='.$index;
        }
        echo '<br>';
    }