<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function exercise()
{
    $matkul00 = new \stdClass();
    $matkul00->namaMatkul = "Sistem Operasi";
    $matkul00->jumlahSks = 3;
    $matkul00->semester = 3;

    $matkul01 = new \stdClass();
    $matkul01->namaMatkul = "Algoritma dan Pemrograman";
    $matkul01->jumlahSks = 4;
    $matkul01->semester = 1;

    $matkul02 = new \stdClass();
    $matkul02->namaMatkul = "Kalkulus Dasar";
    $matkul02->jumlahSks = 2;
    $matkul02->semester = 1;

    $matkul03 = new \stdClass();
    $matkul03->namaMatkul = "Basis Data";
    $matkul03->jumlahSks = 2;
    $matkul03->semester = 3;

    $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);

    // Tampilkan semua mata kuliah di semester 3
    $matkulsSemester3 = $matkuls->where('semester', 3)->pluck('namaMatkul')->implode(", ");

    // Urutkan mata kuliah berdasarkan jumlah SKS
    $matkulsSorted = $matkuls->sortByDesc('jumlahSks')->map(function ($matkul) {
        return $matkul->namaMatkul . ' (' . $matkul->jumlahSks . ')';
    })->implode(", ");

    return view('collection.exercise', [
        'matkulsSemester3' => $matkulsSemester3,
        'matkulsSorted' => $matkulsSorted,
    ]);
}

}