<?php


class AppController
{

    private $appRoute = [
        'addPROJ' => 'components/forms/formCadastroProjeto.php',
        'addUser' => 'components/forms/formCadastroUsuario.php',
        'addRF' => 'components/forms/formCadastroRequisitoFuncional.php',
        'addRNF' => 'components/forms/formCadastroRequisitoNaoFuncional.php',
        'appLogin' => 'components/forms/formLogin.php',
        'forgPwd' => 'components/forms/formRecuperaPassword.php',
    ];

    public function consoleDotLog($var = null)
    {
        echo '<script>';
        echo 'console.log("'.$var.'")';
        echo '</script>';
    }


    public function getUrlRoute(){

        foreach ( $this->appRoute as $key => $value)
        {
            if(isset($_GET[$key])){
            $this->consoleDotLog($key . ' - ' . $value);
            include_once "{$value}";
            }
        }

    }
}
//    $app = new AppController();
//    $app->getUrlRoute();
//    $app->consoleDotLog();
    //var_dump($rt);