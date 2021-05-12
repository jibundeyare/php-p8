<?php

declare(strict_types = 1);

class Lib
{
    /**
     * Cette fonction additionne deux nombres
     * 
     * @param float $a ce paramètre doit être supérieur ou égal à zéro 
     * @param float $b ce paramètre doit être supérieur ou égal à zéro
     * @return float le résultat de l'addition
     */
    public static function sum(float $a, float $b): float
    {
        // on vérifie que les paramètres sont supérieurs ou égaux à zéro
        if ($a < 0) {
            // le paramètre $a est inférieur à zéro
            // on génère une exception
            throw new Exception("le paramètre \$a a une valeur négative $a");
        } elseif ($b < 0) {
            // le paramètre $b est inférieur à zéro
            // on génère une exception
            throw new Exception("le paramètre \$b a une valeur négative $b");
        }

        return $a + $b;
    }
}