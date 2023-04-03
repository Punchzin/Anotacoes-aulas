<?php

class Usuario{
    private $nome;
    private $senha;
    private $email;
    private $pdo;

    public function __construct(){
        $caminho = "mysql:dbname=usuario;host=localhost";
        $usuario = "root";
        $senha = "";

        try{
            $this->pdo = new PDO($caminho, $usuario, $senha);
            echo "<h2>Conectado ao banco";
        } catch(\Throwable $th){
            echo "<h2>Banco de dados Indisponivel, tente novamente mais tarde!";
        }
    }

    public function getEmail(){
        return $this->email;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function incluirRegistro($nome, $email, $senha){
        //1 - criar uma variavel com a consulta
        //2 - acessar o metodo prepare do pdo e passar essa consulta
        //3 -  usar o bindValue para cada apelido
        //4 - acessar o metodo execute para rodar o comando

        //1
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";

        //2 
        $sql = $this->pdo->prepare($sql);

        //3
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);

        //4
        $isOk = $sql->execute();
    }

    public function getAll(){
        $sql = "SELECT * FROM usuarios";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount()> 0){
            return $sql->fetchAll();
        }else{
            return Array();
        }
    }
}

