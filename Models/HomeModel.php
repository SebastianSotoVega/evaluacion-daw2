<?php

class HomeModel
{
    // declaro la propiedad para que php 8.2 no muestre el aviso de "dynamic property"
    public $table;

    public function __construct()
    {
        $this->table = "home"; // Nombre de la tabla en la base de datos
    }
}
