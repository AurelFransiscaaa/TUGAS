<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $universitas;
    public $mataKuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $universitas, $mataKuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
        $this->setGrade();
        $this->setPredikat();
        $this->setStatusTernary();
    }

    public function setGrade() {
        if ($this->nilai >= 85) {
            $this->grade = "A";
        } elseif ($this->nilai >= 75) {
            $this->grade = "B";
        } elseif ($this->nilai >= 65) {
            $this->grade = "C";
        } elseif ($this->nilai >= 55) {
            $this->grade = "D";
        } else {
            $this->grade = "E";
        }
    }

    public function setPredikat() {
        if ($this->grade == "A") {
            $this->predikat = "Sangat Memuaskan";
        } elseif ($this->grade == "B") {
            $this->predikat = "Memuaskan";
        } elseif ($this->grade == "C") {
            $this->predikat = "Cukup";
        } elseif ($this->grade == "D") {
            $this->predikat = "Kurang";
        } else {
            $this->predikat = "Sangat Kurang";
        }
    }

    public function setStatusTernary() {
        $this->status = ($this->nilai >= 65) ? "Lulus" : "Tidak Lulus";
    }
}

?>