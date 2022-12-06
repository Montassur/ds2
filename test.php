<?php
    var_dump($_POST);
    $S="localhost" ;
    $U="root" ;
    $P="" ;
    $B="BDP" ;
    
    //etabli la connexion
    $conn=mysqli_connect($S,$U,$P,$B);

    //verifie la connexion 
    if(!$conn){
           die("Erreur".mysqli_connect_error());
    }
    else{

        // recuperer les donnees
        $User=$_POST['User'];
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $phone=$_POST['phoneno'];
        $password=$_POST['password'];
 
        //inserer les donnees dans la table 
        $sql="INSERT INTO users VALUES($User,$Name,$Email,$phone,$password)";
 
        //execution de la requete
        if(mysqli_query($conn,$sql))
            {echo("Insertion réussit");}
        else
            {echo("Insertion échoué");}
    }
    // fermer la connexion
    mysqli_close($conn);
?>