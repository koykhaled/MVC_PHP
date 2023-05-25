<h1>users</h1>
<?php

foreach ($users as $user) {
    echo $user->getId() . "-" . $user->getName() . "<br>";
}