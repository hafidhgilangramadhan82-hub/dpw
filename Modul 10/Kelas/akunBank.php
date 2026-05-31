<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    public function setNama($namaPemilik)
    {
        $this->nama = $namaPemilik;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function tambahUang($nominalMasuk)
    {
        $this->jmlUang += $nominalMasuk;
    }

    public function kurangiUang($nominalKeluar)
    {
        // Opsional: Bisa ditambah validasi jika saldo tidak mencukupi
        $this->jmlUang -= $nominalKeluar;
    }

    public function tampilkanJumlahUang()
    {
        return $this->jmlUang;
    }

    public function hitungPajak()
    {
        $tarif_pajak = 0.11;
        $total_pajak = $this->jmlUang * $tarif_pajak;
        return $total_pajak;
    }
}
?>