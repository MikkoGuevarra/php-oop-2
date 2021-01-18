<?php
require_once 'User.php';

$user1 = new User('mikko', 'guevarra');
$user2 = new User('paulo', 'aquino');

try {
    $user1->ageControl(20);
    $user2->ageControl(30);
} catch (\Exception $e) {
    echo "error = " . $e->getMessage();
}

try {
    $user1->emailControl('mguevarra@gmail.com');
    $user2->emailControl('mguevarra222@gmail.com');
} catch (\Exception $e) {
    echo "error = " . $e->getMessage();
}

// var_dump($user1);
// var_dump($user2);

$users = [$user1, $user2];
var_dump($users);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>blog users</h1>
        <?php foreach ($users as $user): ?>
            <p>Name: <?php echo $user->name ?></p>
            <p>Last Name: <?php echo $user->lastname ?></p>
            <p>Email: <?php echo $user->email ?></p>
        <?php endforeach; ?>

    </body>
</html>
