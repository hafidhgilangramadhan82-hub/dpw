<?php

// Berkas cetakan sub-kelas (Child Class) yang merupakan turunan dari Manusia.php
require_once "kelas/manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    // Constructor bawaan modul untuk inisialisasi nama dari parent class
    public function __construct($nama)
    {
        // Memanfaatkan fungsi setNama() yang diwarisi dari kelas Manusia.php
        $this->setNama($nama);
    }

    // Setter untuk mengisi Nomor Induk Mahasiswa
    public function setNIM($nimMahasiswa)
    {
        $this->NIM = $nimMahasiswa;
    }

    // Getter untuk mengambil Nomor Induk Mahasiswa
    public function getNIM()
    {
        return $this->NIM;
    }

    // Setter untuk mengisi nama Program Studi / Jurusan
    public function setJurusan($namaJurusan)
    {
        $this->jurusan = $namaJurusan;
    }

    // Getter untuk mengambil nama Program Studi / Jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }

    // Setter untuk mengisi ruang/kelompok kelas (misal: 2B)
    public function setKelas($kodeKelas)
    {
        $this->kelas = $kodeKelas;
    }

    // Getter untuk mengambil ruang/kelompok kelas
    public function getKelas()
    {
        return $this->kelas;
    }
}
?>