<?php 
    include 'bdconnexion.php';
   // var_dump($_POST);
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $rep = $cnx->prepare('INSERT INTO students(firstname,lastname,email,phone) 
    VALUES (:param_firstname,:param_lastname,:param_email,:param_phone)'
    );
    $rep->bindParam(':param_firstname',$firstname);
    $rep->bindParam(':param_lastname',$lastname);
    $rep->bindParam(':param_email', $email);
    $rep->bindParam(':param_phone',$phone);
    $rep->execute();
    if($rep){
        header('location:index.php'); //kif tbda e rep shiha yt3ada toul lel index.html
    }
?>