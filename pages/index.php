<?php 
    require('../incl/fonction.php');
    $list=list_dept();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des departement</title>
</head>
<body>
    <main>
        <table border='1px'>
            <tr>
                <td><strong>Departement</strong></td>
                <td><strong>Manager</strong></td>
            </tr>
            <?php foreach($list as $list){ ?>
                <tr>
                    <td><a href="traitement_emp.php?dept_no=<?= $list['dept_no']?>"><?= $list['dept_name']?></a></td>
                    <td><?= $list['first_name']?></td>
                </tr>
                <?php }?>
        </table>
    </main>
</body>
</html>