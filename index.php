<?php
require_once 'User.php';

$user1 = new User('mikko', 'guevarra');
try {
    $user1->ageControl(20);
} catch (\Exception $e) {
    echo "error = " . $e->getMessage();
}

?>
