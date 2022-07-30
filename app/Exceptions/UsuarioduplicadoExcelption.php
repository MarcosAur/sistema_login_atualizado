<?php

namespace App\Exceptions;

use Exception;

class UsuarioduplicadoExcelption extends Exception
{
    public static function report(){
        echo "Usuário existente";
    }
}
