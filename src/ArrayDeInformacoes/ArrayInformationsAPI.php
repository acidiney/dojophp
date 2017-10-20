<?php

namespace DojoPHP\ArrayDeInformacoes;

/**
 *
 *
 *
 *
 */

class ArrayInformationsAPI
{
    public $email;
    public $name;
    public $telephone;
    public $data = array();

    public function __construct($email, $name, $telephone)
    {
        $this->email = $email;
        $this->name  = $name;
        $this->telephone = $telephone;
    }

    public function CreateArrayWithInformation()
    {
        $this->data = [ 'E-mail'     => $this->email, 
          'Name'         => $this->name, 
          'Telefone' => $this->telephone];
        return $this->data;
    }
}
