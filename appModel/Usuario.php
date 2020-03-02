<?php


class Usuario
{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $linkPerfilGitHub;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    /**
     * @param mixed $nomeUsuario
     */
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    /**
     * @return mixed
     */
    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    /**
     * @param mixed $emailUsuario
     */
    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    /**
     * @param mixed $senhaUsuario
     */
    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;
    }

    /**
     * @return mixed
     */
    public function getLinkPerfilGitHub()
    {
        return $this->linkPerfilGitHub;
    }

    /**
     * @param mixed $linkPerfilGitHub
     */
    public function setLinkPerfilGitHub($linkPerfilGitHub)
    {
        $this->linkPerfilGitHub = $linkPerfilGitHub;
    }


}