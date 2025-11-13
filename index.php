<!-- <script src="app/views/estilos/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="app/views/estilos/css/bootstrap.min.css">
<link rel="stylesheet" href="app/views/estilos/css/estilos.css"> -->

<?php

    include __DIR__ . '/includes/bootstrap.php';

    require_once 'app/controllers/UserController.php';

    $userController = new UserController();

    $userController->getAllUsers();

?>