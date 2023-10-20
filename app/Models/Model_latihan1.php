<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_latihan1 extends Model
{
    // membuat properti untuk menampung nilai
    // buat property2x
    public $nilai1, $nilai2, $hasil;

    // method jumlah ada 2 parameter dam ada value bawaan jadi jika aku tidak mengirim argument maka tidak error harus nya
    public function jumlah($n1 = null, $n2 = null) {
        // panggil property $nilai1 yang berada diluar lalu isi dengan value parameter $n1 anggaplah 1
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        // panggil property hasil yang berada diluar lalu diisi dengan value property $nilai1 + $nilai2
        $this->hasil = $this->nilai1 + $this->nilai2;
        // kembalikkan value variable $hasil
        return $this->hasil;
    }
}

