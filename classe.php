<?php

class Converter
{
    public $Nromanos = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];


    function RomanoPinteiro($romano)
    {	$i = 0;
        $retorno = 0;
        $roman = strtoupper($romano);
        $length = strlen($roman);

        foreach ($this->Nromanos as $comp => $valor) {
            while ($i < $length && substr($roman, $i, strlen($comp)) == $comp) {
                $retorno += $valor;
                $i += strlen($comp);
            }
        }

        return $retorno;
    }

	function inteiroPRomano($numero)
    {
        $retorno = '';
        foreach ($this->Nromanos as $romano => $valor) {
            while ($numero >= $valor) {
                $retorno .= $romano;
                $numero -= $valor;
            }
        }
        return $retorno;
    }
}
