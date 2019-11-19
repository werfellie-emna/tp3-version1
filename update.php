<?php 
    include 'bdconnexion.php';
   // var_dump($_POST);
    //$id=$_GET['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];
    $rep = $cnx->prepare('UPDATE students SET firstname=:param_firstname, lastname=:param_lastname, email=:param_email ,phone=:param_phone 
                        WHERE id=:param_id');
    $rep->bindParam(':param_firstname',$firstname);
    $rep->bindParam(':param_lastname',$lastname);
    $rep->bindParam(':param_email', $email);
    $rep->bindParam(':param_phone',$phone);
    $rep->bindParam(':param_id',$id);
    $rep->execute();
    if($rep){
        header('location:index.php'); //kif tbda e rep shiha yt3ada toul lel index.html
    }
?>
<!-- ?update=success ///// kenet ma7touta fel header b3d index.php w na7itha m fhtsh esh t3mel !  -->