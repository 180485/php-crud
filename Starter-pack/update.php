<?php
require 'setup.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();


if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $cardRepository->update();
        //$cards=$cardRepository->get();
        echo '<div class="alert alert-success" role="alert"> Your COMIC is update ! </div>';
    }

}
?>
