<?php
class Database
{
    public function conectDB()
    {
        try {
            $dbconnect=new PDO("mysql:host=localhost; dbname=requisites", "root", "");
            echo '<script>';
            echo "console.log('Conectou ao banco de dados')";
            echo '</script>';
        } catch (PDOException $e) {
            echo 'Erro de banco: ' . $e->getMessage();
            echo '<script>';
            $err = $e->getMessage();
            echo 'console.log("Erro de banco de dados: '.$err.'")';
            echo '</script>';
        }
    //Retorna uma conexao
    return $dbconnect;
    }

}