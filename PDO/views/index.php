<?php

require "../config/MonPDO.php";
require "../config/userDAO.php";
require "../model/user.php";
require "../controller/UserController.php";

$con = MonPDO::getPDO();

$controller = new UserController();

$users = $controller->getUsers();

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role ID</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['fname'] ?></td>
                <td><?= $user['lname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone_number'] ?></td>
                <td><?= $user['role'] ?></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

