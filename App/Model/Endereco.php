<?php

namespace App\Model;

use App\DAO\Conn;

class Endereco extends Conn
{
    protected static $Table = "tb_endereco";

    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }





}