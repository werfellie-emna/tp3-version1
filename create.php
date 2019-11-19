<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>create etudiant </title>
</head>
<body>
<div class="container">
<fieldset>
   <legend> students table : </legend>
        <form action="store.php" method="POST">
            <div class="form-group">
            <label for="">first Name</label>
            <input type="text"  class="form-control" name="firstname">
            </div>
            <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
            <label for="">Email</label>
            <input  type="email" class="form-control"  class="form-control" name="email">
            </div>
            <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</fieldset>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>