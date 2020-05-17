<?php


namespace App\Models;

//Importando o modelo de class
use MF\Model\Model;

class Laboratorio extends Model{

    private $nome_lab;
    private $bolsista;
    private $situacao;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }


    
}

?>