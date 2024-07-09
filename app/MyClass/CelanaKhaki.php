<?php

namespace App\MyClass;

class CelanaKhaki extends Celana
{
    protected $warna;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function showDetails()
    {
        return "Ini adalah celana khaki warna {$this->warna}";
    }
}