<?php
 
$smarty = new Template();

$login = new Login();

if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];  
    $login->GetLogin('gleyson@hotmail.com', '123');
}

if(Login::Logado()){
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}

$smarty->display('login.tpl');

?>