<?php


namespace App\Models;

//Importando o modelo de class
use MF\Model\Model;

class Usuario extends Model{

    private $id_usuario;
    private $nome_usuario;
    private $email_usuario;
    private $senha_usuario;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function autenticar(){

        $query = "select id_usuario, nome_usuario, email_usuario, senha_usuario from usuario where email_usuario= :email and senha_usuario = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email_usuario'));
        $stmt->bindValue(':senha', $this->__get('senha_usuario'));
        $stmt->execute();
           
        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($usuario['id_usuario'] != '' && $usuario['nome_usuario'] != ''){

            $this->__set('id_usuario', $usuario['id_usuario']);
            $this->__set('nome_usuario', $usuario['nome_usuario']);
        }

        return $this;
    }
}

?>