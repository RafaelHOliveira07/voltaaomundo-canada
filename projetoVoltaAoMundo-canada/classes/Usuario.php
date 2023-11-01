 <?php

class Usuario {

    public $id;
    public $usuario;
    public $senha;


    public function __construct($id = false)
    {
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql = "INSERT INTO tb_usuarios (id,usuario,senha) VALUES ('{$this->usuario}', '{$this->senha}')";
        include_once "classes/conexao.php";
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";
    }

}

 ?>