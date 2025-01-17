<?php

include_once "../lib/php/functions.php";

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reading Data</title>

    <?php include "../parts/meta.php"?>
</head>
<body>
    <style>
        .notes {
            margin-top: 6em;
        }
    </style>
    <?php include_once "../parts/navbar.php"?>
    <?php include_once "../parts/banner.php"?>

    <div class="container">
        <div class="card soft notes">
            <h2>Notes</h2>
            <?php 
                for ($i = 0; $i < count($notes_object->notes); $i++) {
                    echo "<li> {$notes_object->notes[$i]} </li>";
                }
            ?>
        </div>
        <div class="card soft users">
            <h2>Users</h2>
            <?php 
                for ($i = 0; $i < count($users_array); $i++) {
                    echo "<li> 
                        <strong> {$users_array[$i]->name} </strong>
                        <span> {$users_array[$i]->type} </span>
                    </li>";
                }
            ?>
        </div>
    </div>

</body>
</html>