<?php
try {
    include '../vendor/autoload.php';
    include '../appModel/Usuario.php';
    include '../appConfig/Database.php';
    $db = new Database;
    $db->conectDB();
}catch (Exception $e){
    $e->getMessage(). ' - '. $e->getLine();
}
class UsuarioDao{

    public function insertUsuario()
    {
        $database = new Database();
        $usuario = new Usuario();
        $usuario->setIdUsuario(0112);
        $usuario->setEmailUsuario('email@email.com');
        $usuario->setSenhaUsuario(md5('123456'));
        $usuario->setLinkPerfilGitHub('https://github.com/reltonfidelisdev');

        $database->conectDB();
        var_dump($database);

    }

}


