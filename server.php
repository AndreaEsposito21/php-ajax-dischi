<?php 
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');

    if ( isset($_GET['genere']) && $_GET['genere'] != "" ) {
        
        $databaseFiltrato = [];

        foreach( $database as $item ) {
            if ( strtolower($item['genre']) == strtolower($_GET['genere']) ) {

                $databaseFiltrato[] = $item;
            }
        }

        echo json_encode($databaseFiltrato);

    } else {

        echo json_encode($database);
    }
?>