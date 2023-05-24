<?php

foreach ($users as $user) {
    echo $user->getId() . "-" . $user->getName() . "<br>";
}