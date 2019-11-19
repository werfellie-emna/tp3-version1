<?php
 include 'bdconnexion.php';
 $id=$_GET['id'];
 $rep = $cnx->prepare('DELETE FROM students WHERE id=:id');
 $rep->bindParam(':id',$id);
 $rep->execute(); 
 if($rep){
    header('location:index.php'); //kif tbda e rep shiha yt3ada toul lel index.html
}
?>
