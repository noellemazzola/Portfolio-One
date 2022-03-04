<?php
    
    if (isset($_POST["horns"])) {
        $monsterone = file_get_contents('horn monster.png');
        header('Content-Type: image/gif');
        echo $monsterone;
    }

    if (isset($_POST["bigTeeth"])) {
        $monstertwo = file_get_contents('big teeth.png');
        header('Content-Type: image/gif');
        echo $monstertwo;
    }

    if (isset($_POST["cyclops"])) {
        $monsterthree = file_get_contents('one eye.png');
        header('Content-Type: image/gif');
        echo $monsterthree;
    }

    if (isset($_POST["tail"])) {
        $monsterfour = file_get_contents('tail.png')
        header('Content-Type: image/gif');
        echo $monsterfour;
    }

    if (isset($_POST["claws"])) {
        $monsterfive = file_get_contents('claws.png');
        header('Content-Type: image/gif');
        echo $monsterfive;
    }
?>