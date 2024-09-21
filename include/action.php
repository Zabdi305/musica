<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>actions</title>
</head>
<body>
    <form action ="<?php echo $_SERVER?>" method= "Post">
        <input type ="text" name="Usuario" placeholder="Usuario" class="form-control" required/>
        <input type ="password" name="pass" placeholder="Password" class="form-control" required/>
        <input type ="submit" name="btningresar" class="btn-sm btn-succes" value="Ingresar"/>

    
    </form>

</body>
</html>