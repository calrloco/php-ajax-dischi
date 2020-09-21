<?php
include 'db.php';
richiestaDb($database);
/// funzione per richesta db di autore
function richiestaDb($database){
    
    if (empty($_GET['author'])) {
        header('Content-Type: application/json');
        echo json_encode($database);
    } else {
        foreach ($database as $key) {
            $selectArtist = [];
            if (in_array($_GET['author'], $key)) {
                array_push($selectArtist, $key);
                header('Content-Type: application/json');
                echo json_encode($selectArtist);
            }
        }
    }
}
