<?php
class Model
{
    private $PDO;

    function __construct()
    {
        //127.0.0.1
        $this->PDO = new PDO('mysql:host=localhost;dbname=photoflash', 'root', '');
    }

    public function setData($sql)
    {
        if ($sql == null) {
            die("Sql vazio.");
        } else {
            $stmt = $this->PDO->prepare($sql);
            $resultado = $stmt->execute();
            return "Sucesso!";
        }
    }

    public function getData($sql)
    {
        if ($sql == null) {
            die("Sql vazio.");
        } else {
            $resultado = $this->PDO->query($sql);
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }

}


?>



<?php
//define('HOST', '127.0.0.1');
//define('USUARIO', 'root');
//define('SENHA', '');
//define('DB', '');

//$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar com o Banco de Dados!');


?>