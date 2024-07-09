<?php

namespace App\MyClass;

class CelanaCapri extends Celana
{
    protected $panjang;

    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function getPanjang()
    {
        return $this->panjang;
    }

    public function showDetails()
    {
        return "Ini adalah celana capri dengan panjang {$this->panjang}";
    }
}