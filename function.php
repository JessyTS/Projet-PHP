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

    };
?>