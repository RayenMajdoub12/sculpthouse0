<?php
    class Date{

        function getAll($year){
            $r = array();
            $date = '2011-01-01';
            // ce que je veux obtenir => $r[ANNEE][MOIS][JOUR] = JOUR DE LA SEMAINE
            $y = date('Y',$date);
            $m = date('m',$date);
            $d = date('d',$date);
            $w = str_replace('0','7',date('w',$date));
            $r[$y][$m][$d] = $w;
            return $r;
        }

    }
?>