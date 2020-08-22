<?php


namespace App\Helpers;

use Illuminate\Support\Str;

class CityHelper
{
    public static function verifyCity($state)
    {
        if ($state->uf != 'SP')
            return false;
        $city = Str::slug($state->name);
        if ($city == 'sao-paulo')
            return true;
    }
}