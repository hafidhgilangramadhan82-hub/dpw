<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "253307047";
    protected $umur; 

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }
    public function getNIK()
    {
        return "[" . $this->nik . "]";
    }
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    public function getUmur()
    {
        return $this->umur;
    }
}