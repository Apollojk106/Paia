<?php

class bancodedados{

    private $Usuario;
    private $Email;
    private $Senha;
    private $Nome;

    public function __construct($Usuario, $Email, $Senha, $Nome){
        $this->Usuario = $Usuario;
        $this->Email = $Email;
        $this->Senha = $Senha;
        $this->Nome = $Nome;       
    } 

    public function Create():string
    {
        $conn = new PDO("mysql:dbname=Clientes;host=localhost",
            "root","jk106");

            $Email = $this->Email;
            $Usuario = $this->Usuario;
            $Senha = $this->Senha;
            $Nome = $this->Nome;

        if($this->ReadExist($Usuario) == false)
        {
            try
            {
                
                $stmt = $conn->prepare(" insert into Usuarios(Email, Usuario, Senha, Nome) VALUES(:Email,:Usuario,:Senha,:Nome);");

                $stmt->bindParam(':Email', $Email, PDO::PARAM_STR);
                $stmt->bindParam(':Usuario', $Usuario, PDO::PARAM_STR);
                $stmt->bindParam(':Senha', $Senha, PDO::PARAM_STR);
                $stmt->bindParam(':Nome', $Nome, PDO::PARAM_STR);

                $stmt->execute();

                return "Inserido com sucesso!";
            }
            catch(Exception)
            {
                return "Erro";
            }
        }
        else
        {
            return "Já existente!";
        }
        
    }

    public function ReadSenha(): string
    {

        $conn = new PDO("mysql:dbname=Clientes;host=localhost",
        "root","jk106");

        $Usuario = $this->Usuario;

        $stmt = $conn->prepare("select * from Usuarios where Usuario='". $Usuario ."';");

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            return $result['Senha'];
        } else {
            return "Usuário não encontrado.";
        }
    }

    public function ReadExist($user)
    {
        
            $conn = new PDO("mysql:dbname=Clientes;host=localhost",
            "root","jk106");

            $Usuario = $this->Usuario;

            $stmt = $conn->prepare("select * from Usuarios where Usuario='". $user ."';");

            $stmt->execute();

            $result = $stmt->fetchColumn(PDO::FETCH_ASSOC);

            return $result > 0;
        

    }

    


}