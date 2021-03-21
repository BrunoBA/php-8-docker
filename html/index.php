<?php


require_once __DIR__.'/bootstrap.php';

use App\User;
use Carbon\Carbon;

$dateTime = (new Carbon())->format("d/m/Y H:i:s");
$user = new User("User");

echo $twig->render(
    'index.html',
    [
        'time' => $dateTime,
        'user' => $user,
    ]
);
