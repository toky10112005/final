<?php 
    session_start();
    require('../incl/fonction.php');
    $list=fiche($_SESSSION['emp_no']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach($list as $list){?>
                <li><?= $list['']?></li>
            <?php }?>
        </ul>    
    </main>
</body>
</html>