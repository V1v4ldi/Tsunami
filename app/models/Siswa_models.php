<?php
class Siswa_models {
    private $siswa =
    [
        [
            "nama" => "Rikza H",
            "nrp" => "023423",
            "email" => "rikzahasan@gmail.id"
            ]
        ];

    public function semuasiswa()
    {
        return $this->siswa;
    }
}