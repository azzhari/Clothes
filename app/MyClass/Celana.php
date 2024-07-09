<?php

namespace App\MyClass;

class Celana implements Detailable
{
    protected $jenis;

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function greeting()
    {
        return "Ini adalah celana jenis {$this->jenis}";
    }

    public function showDetails()
    {
        return "Detail dari celana jenis {$this->jenis}";
    }
}