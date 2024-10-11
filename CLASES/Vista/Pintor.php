<?php
class Pintor{

    // Método estático que pinta el array de marcas
    public static function listamarcas($marcas) {
        echo '<ul>';
        foreach ($marcas as $marca) {
            echo '<li>' . $marca->nombre . '</li>';
        }
        echo '</ul>';
    }
}