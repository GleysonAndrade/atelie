<?php
class Login extends Conexao{
    private $user, $senha;

    function __construct()
    {
        parent::__construct();
    }

    function GetLogin($user, $senha){
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}cliente WHERE
        cli_email = :email AND cli_pass = :senha";

        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();

            $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
            $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
            $_SESSION['CLI']['cli_rua'] = $lista['cli_rua'];
            $_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
            $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
            $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
            $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
            $_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
            $_SESSION['CLI']['cli_rg'] = $lista['cli_rg'];
            $_SESSION['CLI']['cli_ddd'] = $lista['cli_ddd'];
            $_SESSION['CLI']['cli_fone'] = $lista['cli_fone'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_pass'] = $lista['cli_pass'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];

            echo 'login efetuado';
        }else{
            echo 'login nao efetuado';
        }
    }

    static function Logado(){
        if(isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_email'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    private function setUser($user){
        $this->user = $user;
    }
    private function setSenha($senha){
        $this->senha = $senha;/*Sistema::Criptografia($senha);*/
    }
    function getUser(){
        return $this->user;
    }
    function getSenha(){
        return $this->senha;
    }
} 
?>