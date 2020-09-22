<?php
include 'db.php';
richiestaDb($database);
function encode($db)
{
    header('Content-Type: application/json');
    echo json_encode($db);
}
/// funzione per richesta db di autore
function richiestaDb($database){
    if (empty($_GET['author'])) {
        encode($database);
    } else {
        $selectArtist = [];
        foreach ($database as $key) {
            if (in_array($_GET['author'], $key)) {
                array_push($selectArtist, $key);
            }
        }
        encode($selectArtist);
    }
}
