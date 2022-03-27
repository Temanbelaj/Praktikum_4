<?php
// buat class
class NilasMahasiswa
{
    // properti
    public $nim;
    public $matkul;
    public $nilai;

    // metode konstruksi
    function _construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hitungnilai(){
        return $this->nilai;
    }

    function keterangan(){
        if ($this->nilai > 55) {
            return "LULUS";
          } else {
            return "TIDAK LULUS";
          }
    }

    // metode peringkat

    function predikat($keterangan){
        if ($keterangan >= 85 && $keterangan <= 100) {
            return "A";
        }elseif ($keterangan >= 70 && $keterangan <= 84) {
            return "B";
        }elseif ($keterangan >= 56 && $keterangan <= 69) {
            return "C";
        }elseif ($keterangan >= 36 && $keterangan <= 55) {
            return "D";
        }elseif ($keterangan >= 0 && $keterangan <= 35) {
            return "E";
        }else {
            return "Anda harus mengevaluasi taktik belajarnya";
        }
    }
}
