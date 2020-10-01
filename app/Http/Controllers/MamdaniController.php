<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MamdaniController extends Controller
{
    private function fuzzifikasi(Request $request)
    {
        // a)	Mahasiswa yang memiliki IPK paling tinggi;
        // b)	Mahasiswa yang memiliki  jumlah SKS paling banyak dalam satu angkatan;
        // c)	Mahasiswa yang memiliki prestasi dalam kegiatan kurikuler, ko-kurikuler, maupun ekstrakurikuler  tingkat nasional maupun tingkat internasional;
        // d)	Mahasiswa yang memiliki keterbatasan kemampuan ekonomi

        $arrayIPK = [
            3.15, 2.17, 3.45, 3.58, 2.85, 3.18
        ];

        $jumSKS = [
            12, 19, 12, 14, 13, 15
        ];

        // 'Rendah', 'Cukup', 'Baik'
        $prestasi = [
            'Rendah', 'Cukup', 'Baik',
            'Rendah', 'Cukup', 'Baik'
        ];
        
        $ekonomi = [
            1000000, 1200000, 800000, 
            1500000, 1500000, 5000000, 
        ];
    }
    
    private function implikasi(Request $request)
    {

    }
    
    private function rules(Request $request)
    {

    }
    
    private function defuzzifikasi(Request $request)
    {

    }
}
