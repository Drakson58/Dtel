<?php


namespace App\Models;

//Importando o modelo de class
use MF\Model\Model;

class Bolsista extends Model{

    private $id_bolsista;
    private $turno;
    private $nome_bolsista;
    private $email_bolsista;
    private $senha_bolsista;
    private $situacao;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }


    public function cadastrar_bolsista(){

        $query = "insert into bolsistas(turno, nome_bolsista, email_bolsista, senha_bolsista) values (:turno, :nome_bolsista, :email_bolsista, :senha_bolsista)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':nome_bolsista', $this->__get('nome_bolsista'));
        $stmt->bindValue(':email_bolsista', $this->__get('email_bolsista'));
        $stmt->bindValue(':senha_bolsista', $this->__get('senha_bolsista'));
        $stmt->execute();

        $bolsista = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $this;
    }


    public function verifica_campos(){

        if(strlen($this->__get('email_bolsista')) <= 5 || strlen($this->__get('nome_bolsista')) <= 5 || strlen($this->__get('senha_bolsista')) <= 5){
            return false;
        } else {
            return true;
        }
    }


    public function verifica_bolsista(){

        $query = "select id_bolsista, turno, nome_bolsista, email_bolsista, senha_bolsista from bolsistas where email_bolsista = :email_bolsista";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email_bolsista', $this->__get('email_bolsista'));
        $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function cadastrar_em_usuario(){

        $query = "insert into usuario(nome_usuario, email_usuario, senha_usuario) values (:nome_bolsista, :email_bolsista, :senha_bolsista)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome_bolsista', $this->__get('nome_bolsista'));
        $stmt->bindValue(':email_bolsista', $this->__get('email_bolsista'));
        $stmt->bindValue(':senha_bolsista', $this->__get('senha_bolsista'));
        $stmt->execute();

        return $this;
    }


    public function mostrar_bolsista(){

        $query = "select id_bolsista, turno, nome_bolsista, email_bolsista, senha_bolsista, situação_presenca from bolsistas WHERE 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function altera_presenca(){

        $query = "update bolsistas set situação_presenca=:situacao_bolsista  where id_bolsista = :id_bolsista";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_bolsista', $this->__get('id_bolsista'));
        $stmt->bindValue(':situacao_bolsista', $this->__get('situacao'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>