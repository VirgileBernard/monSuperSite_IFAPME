<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Formulaire d'utilisateur"; //Mettre le nom du titre de la page que vous voulez
?>


<?php
require_once __DIR__ . "/../controller/userController.php";



$users=getUsers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Users management</title>
</head>
<body>
<?php 
    if(isset($_SESSION['message']) && isset($_SESSION['msg_type'])):?>
            <div class="alert alert-<?php echo $_SESSION["msg_type"] ;?>">
            <?php 
                echo $_SESSION["message"] ;
                unset($_SESSION['message']);    
                unset($_SESSION['msg_type']);
            ?>
            </div>
<?php endif; ?>

    <div class="container">
        <p> Users list:</p>
        <div class="formSection">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Date of birth</th>
                        <th>Age</th>
                        <th>Action</th>
            
                    </tr>
                </thead>
                <tbody>
                        <?php  foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user["prenom"]?></td>
                                <td><?= $user["nom"]?></td>
                                <td><?= $user["mail"]?></td>
                                <td><?= $user["gender"]?></td>
                                <td><?= $user["ddn"]?></td>
                                <td><?= $user["age"]?></td>
                                <td>
                                    <!-- Edit button: poste edit_id au controller -->
                                    <form action="../controller/userController.php" method="POST" style="display:inline;">
                                        <input type="hidden" name="edit_id" value="<?= $user['id'] ?>">
                                        <button type="submit" class="btn btn-edit">Editer</button>
                                    </form>

                                    <form action="../controller/userController.php" method="POST" onsubmit="return confirm('Confirmer la suppression ?');" style="display:inline;">
                                        <input type="hidden" name="delete_id" value="<?= $user['id'] ?>">
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form> 
                                </td>
                            </tr>
                       <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="btn-container">
            <a class= "btn" href="userForm.php">New user</a>
        </div>


    </div>
    
</body>
</html>


