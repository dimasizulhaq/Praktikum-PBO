<!-- Nama   : Muh.dimas izulhaq hidayat -->
<!-- NIM    : 200513970575-->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 5 -->

<?php

class Pegawai {
    protected $nama;
    
    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getGaji(){
        return Manajer::getGaji();
    }

    public function getKendaraan(){
        return Kurir::getKendaraan();
    }
}

class Manajer extends Pegawai {
    private $gaji;

    public function __construct($nama, $gaji){
        $this->gaji = $gaji;
        parent::__construct($nama);
    }

    public function getGaji(){
        return $this->gaji;
    }
}

class Kurir extends Pegawai {
    private $kendaraan;

    public function __construct($nama, $kendaraan){
        $this->kendaraan = $kendaraan;
        parent::__construct($nama);
    }

    public function getKendaraan(){
        return $this->kendaraan;
    }
}

class Info{
    public static function info(Pegawai $pegawai){
        return 'Manajer ' . $pegawai->getNama() . ' mendapatkan Gaji Rp. ' . $pegawai->getGaji();
    }

    public static function infoKurir(Pegawai $pegawai){
        return 'Kurir ' . $pegawai->getNama() . ' mendapatkan Hadiah ' . $pegawai->getKendaraan();
    }
}

$manajer = new Manajer ('Dimas', 50000000);
$kurir = new Kurir ('Izulhaq', 'Iphone 12 Pro Max');