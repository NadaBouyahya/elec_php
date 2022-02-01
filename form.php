<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data.php" method ="POST">
        <input type="text" placeholder="Ancien index:" name="ancien_index">
        <input type="text" placeholder="Nouvel index:" name="nouvel_index">
        <input type="radio" value="small" name="calibre">small<br>
        <input type="radio" value="medium" name="calibre">medium<br>
        <input type="radio" value="large" name="calibre">large <br>
        <input type="submit" value="calcul">
    </form>
    <?php
   
    ?>
</body>
</html>