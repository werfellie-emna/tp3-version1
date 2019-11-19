<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table  class="table table-bordered">
    <tr>
    <th>ID</th>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>phone</th>
    <th>operation</th>
    </tr>
    

<?php 
 include 'bdconnexion.php';
 $rep = $cnx->prepare('SELECT * FROM students');
 $rep->execute();
while($data = $rep->fetch()){
    echo'<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo'<td> <a href="edit.php?id='.$data['id'].'" class="btn btn-success">Editer</a> 
    <a href="delete.php?id='.$data['id'].'" class="btn btn-danger">supprimer</a> ';
    echo '</td>';
    echo'</tr>';
}
?>

</table>
<a href="create.php" class="btn btn-primary ">ajouter etudiant</a>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>