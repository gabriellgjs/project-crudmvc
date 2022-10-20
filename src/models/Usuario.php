<?php
namespace src\models;
use \core\Model;


class Usuario extends Model {
    public static function tranformPassoword($senha){
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        return $senha;
    }
}