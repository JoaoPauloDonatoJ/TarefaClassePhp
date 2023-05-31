<?php

class Banco {

    private $instance;
    //private $instance2;

    public function conectar(){

        $this->instance = new PDO('mysql:host=localhost;dbname=pwLogin', 'root','etec');
        print 'Conexão efetuada com sucesso ! <br><br>';

    }

    public function pesquisar(){

        $this->instance->prepare("SELECT * FROM tbUsuarios WHERE nmUsuario = :nome AND senha = :senha");
        $this->instance->bindParam(':nome', $nome);
        $this->instance->bindParam(':senha', $senha);
        $this->instance->execute();
        $this->instance->fetch(PDO::FETCH_ASSOC);
    }

    
}

?>