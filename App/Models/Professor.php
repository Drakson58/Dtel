<?php


namespace App\Models;

//Importando o modelo de class
use MF\Model\Model;

class Professor extends Model{

    private $id_aula;
    private $dia_aula;
    private $turno;
    private $laboratorio;
    private $horario;
    private $nome_professor;
    private $turma;
    private $disciplina;
    private $bolsista;
    private $situacao;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function cadastrar_em_segunda(){

        $query = "insert into tabela_de_aulas_segunda(
            dia_aula, 
            laboratorio, 
            turno, 
            horario, 
            nome_professor, 
            turma, 
            disciplina
            ) values (
                :dia_aula,
                :laboratorio,
                :turno,
                :horario,
                :nome_professor,
                :turma,
                :disciplina
            )";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':dia_aula', $this->__get('dia_aula'));
        $stmt->bindValue(':laboratorio', $this->__get('laboratorio'));
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':horario', $this->__get('horario'));
        $stmt->bindValue(':nome_professor', $this->__get('nome_professor'));
        $stmt->bindValue(':turma', $this->__get('turma'));
        $stmt->bindValue(':disciplina', $this->__get('disciplina'));
        $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function horarios_segunda(){

        $query = "select * from tabela_de_aulas_segunda where 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function cadastrar_em_terca(){

        $query = "insert into tabela_de_aulas_terca(
            dia_aula, 
            laboratorio, 
            turno, 
            horario, 
            nome_professor, 
            turma, 
            disciplina
            ) values (
                :dia_aula,
                :laboratorio,
                :turno,
                :horario,
                :nome_professor,
                :turma,
                :disciplina
            )";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':dia_aula', $this->__get('dia_aula'));
        $stmt->bindValue(':laboratorio', $this->__get('laboratorio'));
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':horario', $this->__get('horario'));
        $stmt->bindValue(':nome_professor', $this->__get('nome_professor'));
        $stmt->bindValue(':turma', $this->__get('turma'));
        $stmt->bindValue(':disciplina', $this->__get('disciplina'));
        $stmt->execute();
    
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function cadastrar_em_quarta(){

        $query = "insert into tabela_de_aulas_quarta(
            dia_aula, 
            laboratorio, 
            turno, 
            horario, 
            nome_professor, 
            turma, 
            disciplina
            ) values (
                :dia_aula,
                :laboratorio,
                :turno,
                :horario,
                :nome_professor,
                :turma,
                :disciplina
            )";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':dia_aula', $this->__get('dia_aula'));
        $stmt->bindValue(':laboratorio', $this->__get('laboratorio'));
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':horario', $this->__get('horario'));
        $stmt->bindValue(':nome_professor', $this->__get('nome_professor'));
        $stmt->bindValue(':turma', $this->__get('turma'));
        $stmt->bindValue(':disciplina', $this->__get('disciplina'));
        $stmt->execute();
    
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function cadastrar_em_quinta(){

        $query = "insert into tabela_de_aulas_quinta(
            dia_aula, 
            laboratorio, 
            turno, 
            horario, 
            nome_professor, 
            turma, 
            disciplina
            ) values (
                :dia_aula,
                :laboratorio,
                :turno,
                :horario,
                :nome_professor,
                :turma,
                :disciplina
            )";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':dia_aula', $this->__get('dia_aula'));
        $stmt->bindValue(':laboratorio', $this->__get('laboratorio'));
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':horario', $this->__get('horario'));
        $stmt->bindValue(':nome_professor', $this->__get('nome_professor'));
        $stmt->bindValue(':turma', $this->__get('turma'));
        $stmt->bindValue(':disciplina', $this->__get('disciplina'));
        $stmt->execute();
    
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function cadastrar_em_sexta(){

        $query = "insert into tabela_de_aulas_sexta(
            dia_aula, 
            laboratorio, 
            turno, 
            horario, 
            nome_professor, 
            turma, 
            disciplina
            ) values (
                :dia_aula,
                :laboratorio,
                :turno,
                :horario,
                :nome_professor,
                :turma,
                :disciplina
            )";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':dia_aula', $this->__get('dia_aula'));
        $stmt->bindValue(':laboratorio', $this->__get('laboratorio'));
        $stmt->bindValue(':turno', $this->__get('turno'));
        $stmt->bindValue(':horario', $this->__get('horario'));
        $stmt->bindValue(':nome_professor', $this->__get('nome_professor'));
        $stmt->bindValue(':turma', $this->__get('turma'));
        $stmt->bindValue(':disciplina', $this->__get('disciplina'));
        $stmt->execute();
    
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>