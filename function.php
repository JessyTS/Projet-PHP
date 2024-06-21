<?php
    function result ($tabl) {
        $jessy = 0;
        if (isset($tabl)) {
            foreach ($tabl as $k => $v) {
                $jessy = $jessy + $v;
            };
            return $jessy;
        };
    };

    function result_data ($tabl) {
        $result = [];
        if (isset($tabl)) {
            foreach ($tabl as $k => $v) {
                $result[$k] = $v;
            };
            return $result;
        };
    };

    function creneaux_html ($creneaux) {
        $tab = [];
        foreach ($creneaux as $k) {
            $tab[] = $k;
        };
        return $tab[0];
    };

    function get_file ($file) {
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . $file;
        return file_get_contents($fichier);
    };

    function add_data_file ($file, $data) {
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . $file;
        return file_put_contents($fichier, $data, FILE_APPEND);
    };

    function reset_data_file ($file) {
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . $file;
        return file_put_contents($fichier, '.');
    };
?>