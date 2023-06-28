<?php 

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Ativo";
    case F = "Fechado";
    case P = "Pendente";

    public static function fromValue(string $value): string
    {
        foreach (self::cases() as $status) {
            if ($value === $status->name){
                return $status->value;
            }
        }

        throw new \ValueError("$status não é válido");
    }
}

?>